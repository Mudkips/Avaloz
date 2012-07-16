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
            $this->smarty->assign('cms_rev', 'AvalozCMS revision 0.1.2');
            $this->smarty->assign('error', null);
        }
    }

?>