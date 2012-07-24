<?php 

require_once "strap.php";

if(isset($_GET['figure']))
{
    $figure = $start->misc->xss($_GET['figure']);
    
    if(!preg_match('/^[a-zA-Z0-9.-]+$/i', $figure))
    {
        die('Rawr');
    }
        if($start->config['figures']['cache'])
        {
            
            if(file_exists('system/views/avatars/' . $figure . '.gif'))
            {
                $avatar = file_get_contents('system/views/avatars/' . $figure . '.gif');
                header("Content-Type: image/gif");
                die($avatar);
            }
            
            if(!file_exists('system/views/avatars/' . $figure . '.gif'))
            {
                $avatar = file_get_contents($start->config['figures']['hotel'] . '/habbo-imaging/avatarimage?figure=' . $figure);
                file_put_contents('system/views/avatars/' . $figure . '.gif', $avatar);  
                header("Content-Type: image/gif");
                die($avatar);
            }
            
        }
        if(!$start->config['figures']['cache'])
        {
            $avatar = file_get_contents($start->config['figures']['hotel'] . '/habbo-imaging/avatarimage?figure=' . $figure);
            header("Content-Type: image/gif");
            die($avatar);
        }
}
else
{
    header("Location: " . WWW . "/me");
}

?>