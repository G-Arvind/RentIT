<?php
namespace App\Model;

class UserModel{

	private const ATTRIBUTES=array("uname","uemail","upass","uphno","type");

 	public function getAttributes(){
 		return $this::ATTRIBUTES;
 	}

	private $email,$pass,$fname,$phno,$type;
	
	public function setUserEmail($email){
         $this->email=$email;
	}
	public function setUserPass($pass){
         $this->pass=$pass;
	}
	public function setUserName($fname){
         $this->fname=$fname;
	}
	public function setUserPhno($phno){
         $this->phno=$phno;
	}
	public function setUserType($type){
         $this->type=$type;
	}
    

    public function getUserEmail(){
         return $this->email;
	}
	public function getUserPass(){
         return $this->pass;
	}
	public function getUserName(){
         return $this->fname;
	}
	public function getUserPhno(){
         return $this->phno;
	}
	public function getUserType(){
         return $this->type;
	}


}
?>
