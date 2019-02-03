<?php
namespace App\Delegate;

use App\Util\Connect;
use App\Dao\UserDao;

class SignupDelegate{

	private $userDao;

	function __construct(){

		$this->userDao=new UserDao();

    }


	function addUser($user){
    //echo var_dump($user);
    $resp=$this->userDao->signup($user);

    return $resp;

	}
}
?>