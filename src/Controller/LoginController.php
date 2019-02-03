<?php

namespace App\Controller;

use App\Delegate\LoginDelegate;
//use App\Model\UserModel;

class LoginController{

  public $loginDelegate;

	function __construct(){
         $this->loginDelegate=new LoginDelegate();
	}

   function loginUser($request){

   	$data=$request->getParsedBody();
    $email = $data['username'];
    $pass = $data['password'];
 
    $responseArray=$this->loginDelegate->validateLogin($email,$pass);

    return $responseArray;


   }


}
?>