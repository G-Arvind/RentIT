<?php
namespace App\DAO;

use App\Util\Connect;
use App\Util\ShopUtil;

class DeleteShopDAO{

	function deleteRetail($rid,$aid){
		$ShopUtil=new ShopUtil();
    //echo var_dump($user);
    $resp=$ShopUtil->delete($rid,$aid);

    return $resp;
	}

}
?>