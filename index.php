<?php 

require_once "strap.php";

if(isset($_GET['action']))
{
    $action = $start->misc->secure($_GET['action']);
    
    if($action == "")
    {
        die(require_once "system/actions/index.php");
    }
    
    if(!ctype_alnum($action))
    {
        die(require_once "system/actions/nothanks.php");
    }
    
    if(!file_exists('system/actions/' . $action . '.php'))
    {
        die(require_once "system/actions/error404.php");
    }
    
        require_once "system/actions" . $action . ".php";
}

die(require_once "system/actions/index.php");

?>