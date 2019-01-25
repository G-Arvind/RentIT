<?php
namespace App\DAO;

//use App\Util\Connect;
use App\Util\ShopUtil;

class EditShopDAO{


	function editRetail($shopmodel,$rid,$aid){

        $shop=new ShopUtil();
    //echo var_dump($user);


    $resp=$shop->editAddress($shopmodel,$aid);

    

    //$last_id=$resp["last_id"];

    $resp=$shop->editShop($shopmodel,$rid);


    return $resp;

	}
}
?>