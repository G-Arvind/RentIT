<?php

namespace App\Controller;

use App\Delegate\EditShopDelegate;
use App\Model\ShopModel;
use App\Model\AddressModel;

class EditShopController{

    public $shopmodel,$addressmodel,$editshop;

    function __construct(){

        $this->shopmodel=new ShopModel();
        $this->addressmodel=new AddressModel();
        $this->editshop=new EditShopDelegate();

    }

	public function editShop($request,$args)
	{
	$data=$request->getParsedBody();

   // var_dump($data);
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

    $rid=$args['rid'];
    $aid=$args['aid'];



    
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

    $responseArray=$this->editshop->editRetail($this->shopmodel,$this->addressmodel,$rid,$aid);
	
	return $responseArray;

}
}
?>