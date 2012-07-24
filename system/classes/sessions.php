<?php 

    class Sessions
    {
        public $sessions = Array();
        
        public function create($key, $value)
        {
            return $_SESSION[$key] = $value;
        }
        
        public function get($key)
        {
            return $_SESSION[$key];
        }
        
        public function close($key)
        {
            unset($_SESSION[$key]);
        }
        
        public function loggedIn($name, $data, $user)
        {
            global $start;
            $this->create($name, $data);
            $start->users->updateLastLogin($user);
            $start->misc->redir(WWW . '/me' . EXT);
        }
        
        public function loggedInWithCookie($name, $data, $user)
        {
            global $start;
            setcookie($name, $data, time()+6048000);
            $this->create($name, $data);
            $start->users->updateLastLogin($user);
            $start->misc->redir(WWW . '/me' . EXT);
        }
    }

?>