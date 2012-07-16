<?php 

//Beggining of login.

if(isset($_POST['crednetials_username']) && isset($_POST['credentials_password']))
{
	$user = $start->misc->xss($_POST['credentials_username']);
	$pass = $start->misc->xss($_POST['credentials_password']);
	
	if(!empty($user) && !empty($pass))
	{
		if(strlen($user) <= 42)
		{
			if(validLogin($user, $pass))
			{
				$start->sessions->create('AvalozLogged', $start->users->name2id($user));
			}
			else
			{
				//Invalid username or password
			}
		}
		else
		{
			//Name is very long
		}
	}
	else
	{
		//Fill in fields.
	}
}

$start->smarty->display('generic/headers/index-header.html');

?>