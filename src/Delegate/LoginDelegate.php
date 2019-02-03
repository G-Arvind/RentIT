<?php
namespace App\Delegate;

use App\Util\Connect;
use App\Dao\UserDao;

class LoginDelegate{

	private $user;

	function __construct(){

		$this->user=new UserDao();	

    }

	function validateLogin($email,$password){
		
    //echo var_dump($user);
    $resp=$this->user->login($email,$password);

    return $resp;
	}

}
?>