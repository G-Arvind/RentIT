<?php

namespace App\Controller;

use App\Delegate\ShopDelegate;
use App\Model\ShopModel;
use App\Model\AddressModel;

class ShopController{

    public $shopmodel,$addressmodel,$shop;

    function __construct(){

         session_start();

        $this->shopmodel=new ShopModel();
        $this->addressmodel=new AddressModel();
        $this->shop=new ShopDelegate();

    }

	public function addShopController($request)
	{
	  $data=$request->getParsedBody();

      //var_dump($data);


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

    $this->addressmodel->setShopNo($rno);

    $this->addressmodel->setShopStreet($rstreet);

    $this->addressmodel->setShopArea($rarea);

    $this->addressmodel->setShopCity($rcity);

    $this->addressmodel->setShopPin($rpin);


  //  $shop=new ShopDAO();
    $responseArray=$this->shop->addNewShop($this->shopmodel,$this->addressmodel);
	
	return $responseArray;

}
}
?>