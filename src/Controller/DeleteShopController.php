<?php

namespace App\Controller;

use App\DAO\DeleteShopDAO;
//use App\Model\UserModel;

class DeleteShopController{

  public $deleteShopDAO;

  function __construct(){
         $this->deleteShopDAO=new DeleteShopDAO();
  }

   function deleteShop($request,$args){
    //$data=$request->getParsedBody();
    $rid = $args['shopid'];
    $aid = $args['addressid'];
 
    $responseArray=$this->deleteShopDAO->deleteRetail($rid,$aid);

    return $responseArray;
   }


}
?>