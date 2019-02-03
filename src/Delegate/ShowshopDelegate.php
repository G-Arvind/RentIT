<?php
namespace App\Delegate;

use App\Util\Connect;
use App\Dao\ShopDao;

class ShowshopDelegate{

	private $shop;

	function __construct(){

		$this->shop=new ShopDao();

    }

	function listshops($uid){
    //echo var_dump($user);
    $resp=$this->shop->showshop($uid);

    return $resp;
	}

}
?>