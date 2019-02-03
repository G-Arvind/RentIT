<?php
namespace App\Delegate;

use App\Util\Connect;
use App\Dao\ShopDao;

class ShopDelegate{

	private $shop,$address;

	function __construct(){

		$this->shop=new ShopDao();

    }


	function addNewShop($shopmodel,$addressmodel){

    //echo var_dump($user);

    $resp=$this->shop->addAddress($addressmodel);

    $last_id=$resp["last_id"];

    $resp=$this->shop->addShop($shopmodel,$last_id);

    return $resp;

	}
}
?>