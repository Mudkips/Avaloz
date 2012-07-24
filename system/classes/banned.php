<?php 

    class Banned
    {
        private $value;
        
        public function hasBanCookie()
        {
            if(isset($_COOKIE['IsBanned']))
            {
                $this->value = $_COOKIE['IsBanned'];
                exit($this->banPage());
            }
        }
        
        public function isBanned($value)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT * FROM bans WHERE value=?")->bind_param($value)->execute();
            if($query->num_rows > 0)
            {
                $this->value = $value;
                return true;
            }
                return false;
        }
        
        private function get($column)
        {
            global $start;
            $query = $start->mysqli->prepare("SELECT ".$column." FROM bans WHERE value=?")->bind_param($this->value)->execute();
            return $query->result();
        }
        
        public function youAreBanned()
        {
            setcookie('IsBanned', $this->value, time()+36000);
            exit($this->banPage());
        }
        
        public function banPage()
        {
            global $start;
            $start->smarty->assign('value', $this->get('value'));
            $start->smarty->assign('bantype', $this->get('bantype'));
            $start->smarty->assign('reason', $this->get('reason'));
            $start->smarty->assign('expires', date('d-m-Y H:i:s', $this->get('expire')));
            $start->smarty->assign('added_by', $this->get('added_by'));
            $start->smarty->display('page-banned.html');
        }
    }

?>