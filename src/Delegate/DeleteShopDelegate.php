<?php
namespace App\Delegate;

use App\Util\Connect;
use App\Dao\ShopDao;

class DeleteShopDelegate{

	private $ShopDao;

	function __construct(){

		$this->ShopDao=new ShopDao();

    }

	function deleteRetail($rid,$aid){
		
    //echo var_dump($user);
    $resp=$this->ShopDao->delete($rid,$aid);

    return $resp;
	}

}
?>