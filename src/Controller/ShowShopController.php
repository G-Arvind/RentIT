<?php

namespace App\Controller;

use App\DAO\ShowshopDAO;
//use App\Model\UserModel;

class ShowShopController{

  public $showshopdao;

	function __construct(){
         $this->showshopdao=new ShowshopDAO();
	}

   function showShop($request,$args){

   	// $data=$request->getParsedBody();
    // $email = $data['username'];
    // $pass = $data['password'];

    $uid=$args['uid'];
 
    $responseArray=$this->showshopdao->listshops($uid);

    return $responseArray;


   }


}
?>