<?php

require_once "strap.php";

define('ERRSTART', '<div id="loginerrorfieldwrapper"><div id="loginerrorfield"><div>');
define('ERREND', '</div></div></div>');

if(isset($_SESSION['LoggedIn']))
{
    $start->misc->redir(WWW . '/me' . EXT);
}

elseif(isset($_COOKIE['LoggedIn']))
{
    $start->sessions->loggedIn('LoggedIn', $_COOKIE['LoggedIn'], $start->users->id2name($_COOKIE['LoggedIn']));
}

if(isset($_POST['credentials_username']) && isset($_POST['credentials_password']))
{
    $username = $start->misc->xss($_POST['credentials_username']);
    $password = $start->misc->xss($_POST['credentials_password']);
    $password = $start->misc->hash($password);
    
    if(!empty($username) && !empty($password))
    {
        if(!$start->banned->isBanned($username))
        {
            if($start->users->validLogin($username, $password))
            {
                if(isset($_POST['remember_me']) && $_POST['remember_me'] == true)
                {
                    $start->sessions->loggedInWithCookie('LoggedIn', $start->users->name2id($username), $username);
                }
                $start->sessions->loggedIn();
            }
            else
            {
                $start->smarty->assign('error', ERRSTART . 'Invalid username or password!' . ERREND);
            }
        }
        else
        {
            $start->banned->youAreBanned();
        }
    }
    else
    {
        $start->smarty->assign('error', ERRSTART . 'Please fill in all fields!' . ERREND  );
    }
}

$start->smarty->assign('title', NAME . ' - Index');
$start->smarty->display('generic/headers/index-header.html');
$start->smarty->display('page-index.html');
$start->smarty->display('generic/footers/index-footer.html');

?>