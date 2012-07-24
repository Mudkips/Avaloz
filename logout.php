<?php 

require_once "strap.php";

define('PAGE', 999);

session_destroy();
setcookie('LoggedIn', null, time()-1000);
echo 'woo';
$start->misc->redir(WWW);

?>