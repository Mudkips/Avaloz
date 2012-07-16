<?php 
    
    require_once "system/start.php";
    
    $start = new Start();
    $start->mysqli = new nMySQLi
    (
        $start->config['mysql']['hostname'],
        $start->config['mysql']['username'],
        $start->config['mysql']['password'],
        $start->config['mysql']['database'],
        $start->config['mysql']['portnumb']
    );
    $start->smarty->setTemplateDir('system/views');
    $start->smarty->setCompileDir('system/views/compiled');
    $start->smarty->setCacheDir('system/views/cached');
    $start->smarty->setConfigDir('system/classes/sysplugins');
    $start->smarty->setPluginsDir('system/classes/smarty_plugins');
    $start->smarty->caching = $start->config['cache']['caching'];
    $start->smarty->cache_lifetime = $start->config['cache']['lifetime'];
    $start->templateDefine();

?>