<?php
namespace App\DAO;

use App\Util\Connect;
use App\Util\ShopUtil;

class ShopDAO{


	function addNewShop($shopmodel){

        $shop=new ShopUtil();
    //echo var_dump($user);

    $resp=$shop->addAddress($shopmodel);

    $last_id=$resp["last_id"];

    $resp=$shop->addShop($shopmodel,$last_id);

    return $resp;

	}
}
?>