<?php

namespace App\Controller;

use App\DAO\EditShopDAO;
use App\Model\ShopModel;

class EditShopController{

    public $shopmodel,$editshop;

    function __construct(){

        $this->shopmodel=new ShopModel();
        $this->editshop=new EditShopDAO();

    }

	public function editShop($request,$args)
	{
	$data=$request->getParsedBody();

   // var_dump($data);
    //$uid=$data['uid'];
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
    
  //  $this->shopmodel->setShopUId($uid);

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

    $responseArray=$this->editshop->editRetail($this->shopmodel,$rid,$aid);
	
	return $responseArray;

}
}
?>