<?php

namespace App\Controller;

use App\Delegate\ShowshopDelegate;
//use App\Model\UserModel;

class ShowShopController{

  public $showshopdao;

	function __construct(){

         //session_start();
         $this->showshopDelegate=new ShowshopDelegate();
	}

   function showShop($request,$args){

   	// $data=$request->getParsedBody();
    // $email = $data['username'];
    // $pass = $data['password'];

    $uid=$args['uid'];

 
    $responseArray=$this->showshopDelegate->listshops($uid);

    return $responseArray;


   }


}
?>