<?php 

require_once "strap.php";

if(!isset($_SESSION['LoggedIn']))
{
    $start->misc->redir(WWW . '/index' . EXT);
}

$start->mysqli->query("UPDATE users SET last_online=UNIX_TIMESTAMP() WHERE id='".$_SESSION['LoggedIn']."'");
$start->smarty->assign('lol', $start->users->get($_SESSION['LoggedIn'], 'last_online'));
$start->smarty->assign('title', NAME . ' - Me');
$start->smarty->display('generic/headers/generic-header.html');
$start->smarty->display('generic/components/comp-top-generic.html');
$start->smarty->display('generic/tabs/me-tab.html');
$start->smarty->display('generic/components/comp-me-personal-box.html');

?>