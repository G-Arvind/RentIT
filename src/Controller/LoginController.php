<?php

namespace App\Controller;

use App\DAO\LoginDAO;
//use App\Model\UserModel;

class LoginController{

  public $loginDAO;

	function __construct(){
         $this->loginDAO=new LoginDAO();
	}

   function loginUser($request){

   	$data=$request->getParsedBody();
    $email = $data['username'];
    $pass = $data['password'];
 
    $responseArray=$this->loginDAO->validateLogin($email,$pass);

    return $responseArray;


   }


}
?>