<?php


namespace App\Controller;

use App\DAO\SignupDAO;
use App\Model\UserModel;

class SignupController{
  
  public $user,$userDAO;

  function __construct(){

    $this->user=new UserModel();
    $this->signupDAO=new SignupDAO();

  }

   function addNewUserController($request){

   	$data=$request->getParsedBody();
    $email = $data['username'];
    $pass = $data['password'];
    $fname=$data['fname'];
    $phno=$data['phno'];
    $type=$data['type'];

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    
    //$user=new UserModel();
    
    $this->user->setUserEmail($email);

    $this->user->setUserPass($hashed_password);

    $this->user->setUserName($fname);

    $this->user->setUserPhno($phno);

    $this->user->setUserType($type);

    

   // $userDAO=new UserDAO();

   // $resp=$userDAO->addUser($email,$hashed_password,$fname,$phno,$type);

    $responseArray=$this->signupDAO->addUser($this->user);

    return $responseArray;


   }


}
?>