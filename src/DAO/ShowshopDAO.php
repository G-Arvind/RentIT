<?php
namespace App\DAO;

use App\Util\Connect;
use App\Util\ShopUtil;

class ShowshopDAO{

	function listshops($uid){
		$shop=new ShopUtil();
    //echo var_dump($user);
    $resp=$shop->showshop($uid);

    return $resp;
	}

}
?>