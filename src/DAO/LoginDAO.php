<?php
namespace App\DAO;

use App\Util\Connect;
use App\Util\UserUtil;

class LoginDAO{

	function validateLogin($email,$password){
		$user=new UserUtil();
    //echo var_dump($user);
    $resp=$user->login($email,$password);

    return $resp;
	}

}
?>