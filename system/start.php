<?php 

    class Start
    {
        public $config;
        public $mysqli;
        
        public function __construct()
        {
            $this->getClasses();
            $this->parseConfig();
        }
        
        public function parseConfig()
        {
            if(file_exists('system/configuration/config.php'))
            {
                require_once 'system/configuration/config.php';
                $this->config = $config;
            }
            else
            {
                die('Config file not found');
            }
        }
        
        public function getClasses()
        {
            $files = glob('system/classes/'.'*.php');
            foreach($files as $file)
            {
                
                require_once $file;
                if($file == 'system/classes/storage.php')
                {
                    $class = "";
                }
                else
                {
                    $class = $this->getClassName($file);
                    $className = ucfirst($class);
                    $this->$class = new $className();
                }
            }
        }
        
        public function getClassName($file)
        {
            $start = explode('/', $file);
            $end = explode('.', $start[2]);
            return $end[0];
        }
        
        public function templateDefine()
        {
            $this->smarty->assign('www', $this->config['website']['link']);
            $this->smarty->assign('site_name', $this->config['website']['name']);
            $this->smarty->assign('site_desc', $this->config['website']['desc']);
            $this->smarty->assign('users_online', ($this->misc->server_status('users_online')));
            $this->smarty->assign('cms_rev', 'AvalozCMS revision 0.1.2');
            $this->smarty->assign('queries', nMySQLI::$count);
            $this->smarty->assign('error', null);
                
            if(isset($_SESSION['LoggedIn']))
            {
                $this->smarty->assign('username', $this->users->get($_SESSION['LoggedIn'], 'username'));
                $this->smarty->assign('credits', $this->users->get($_SESSION['LoggedIn'], 'credits'));
                $this->smarty->assign('pixels', $this->users->get($_SESSION['LoggedIn'], 'activity_points'));
                $this->smarty->assign('rank', $this->users->get($_SESSION['LoggedIn'], 'rank'));
                $this->smarty->assign('motto', $this->users->get($_SESSION['LoggedIn'], 'motto'));
                $this->smarty->assign('last_logged_in', $this->users->get($_SESSION['LoggedIn'], 'last_logged'));
                $this->smarty->assign('figure', $this->users->get($_SESSION['LoggedIn'], 'look'));
            }
        }
    }

?>