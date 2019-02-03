<?php
namespace App\Delegate;

use App\Dao\ShopDao;


class EditShopDelegate{

	 private $shop;

	function __construct(){

		$this->shop=new ShopDao();

    }


	function editRetail($shopmodel,$addressmodel,$rid,$aid){
    //echo var_dump($user);


    $resp=$this->shop->editAddress($addressmodel,$aid);

    

    //$last_id=$resp["last_id"];

    $resp=$this->shop->editShop($shopmodel,$rid);


    return $resp;

	}
}
?>