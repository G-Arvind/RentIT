<?php

namespace App\Controller;

use App\DAO\ShopDAO;
use App\Model\ShopModel;

class ShopController{

    public $shopmodel,$shop;

    function __construct(){

        $this->shopmodel=new ShopModel();
        $this->shop=new ShopDAO();

    }

	public function addShopController($request)
	{
	  $data=$request->getParsedBody();

      var_dump($data);


    $uid=$data['uid'];
    $rname = $data['rname'];
    $remail = $data['remail'];
    $rdesc=$data['rdesc'];
    $rphno=$data['rphno'];

    $rno=$data['rno'];
    $rstreet=$data['rstreet'];
    $rarea=$data['rarea'];
    $rcity=$data['rcity'];
    $rpin=$data['rpin'];

    
   // $shopmodel=new ShopModel();
    
    $this->shopmodel->setShopUId($uid);

    $this->shopmodel->setShopName($rname);

    $this->shopmodel->setShopEmail($remail);

    $this->shopmodel->setShopDescripion($rdesc);

    $this->shopmodel->setShopPhno($rphno);

    $this->shopmodel->setShopNo($rno);

    $this->shopmodel->setShopStreet($rstreet);

    $this->shopmodel->setShopArea($rarea);

    $this->shopmodel->setShopCity($rcity);

    $this->shopmodel->setShopPin($rpin);


  //  $shop=new ShopDAO();
    $responseArray=$this->shop->addNewShop($this->shopmodel);
	
	return $responseArray;

}
}
?>