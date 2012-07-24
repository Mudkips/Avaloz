<?php 
    
    session_start();
    require_once "system/start.php";
    
    // Our main class;
    $start = new Start();
    
    // Initiate Mysqli;
    $start->mysqli = new nMySQLi
    (
        $start->config['mysql']['hostname'],
        $start->config['mysql']['username'],
        $start->config['mysql']['password'],
        $start->config['mysql']['database'],
        $start->config['mysql']['portnumb']
    );
    
    // Configure Smarty;
    $start->smarty->setTemplateDir('system/views');
    $start->smarty->setCompileDir('system/views/compiled');
    $start->smarty->setCacheDir('system/views/cached');
    $start->smarty->setConfigDir('system/classes/sysplugins');
    $start->smarty->setPluginsDir('system/classes/smarty_plugins');
    $start->smarty->caching = $start->config['cache']['caching'];
    $start->smarty->cache_lifetime = $start->config['cache']['lifetime'];
    
    // Misc functions;
    $start->templateDefine();
    $start->banned->hasBanCookie();
    $start->banned->isBanned($_SERVER['REMOTE_ADDR']);
    
    // Define some stuff;
    define('NAME', $start->config['website']['name']);
    define('WWW', $start->config['website']['link']);
    define('EXT', '');

?>