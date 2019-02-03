<?php

namespace App\Controller;

use App\Delegate\DeleteShopDelegate;
//use App\Model\UserModel;

class DeleteShopController{

  public $deleteShopDelegate;

  function __construct(){
         $this->deleteShopDelegate=new DeleteShopDelegate();
  }

   function deleteShop($request,$args){
    //$data=$request->getParsedBody();
    $rid = $args['shopid'];
    $aid = $args['addressid'];
 
    $responseArray=$this->deleteShopDelegate->deleteRetail($rid,$aid);

    return $responseArray;
   }


}
?>