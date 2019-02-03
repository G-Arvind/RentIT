<?php 
namespace App\Model;

class ShopModel{


	private const SHOP_ATTRIBUTES=array("rname","remail","rphno","description","uid","aid");

    public function getShopAttributes(){
    	return $this::SHOP_ATTRIBUTES;
    }

	private $uid,$rname,$remail,$rdesc,$rphno;

	public function setShopUId($uid){
         $this->uid=$uid;
	}
	public function setShopName($rname){
         $this->rname=$rname;
	}
	public function setShopEmail($remail){
         $this->remail=$remail;
	}
	public function setShopDescripion($rdesc){
         $this->rdesc=$rdesc;
	}	
	public function setShopPhno($rphno){
         $this->rphno=$rphno;
	}
	
    

    //GETTERS

    public function getShopUId(){
         return $this->uid;
	}
	public function getShopName(){
         return $this->rname;
	}
	public function getShopEmail(){
         return $this->remail ;
	}
	public function getShopDescripion(){
         return $this->rdesc;
	}
	public function getShopPhno(){
         return $this->rphno;
	}
	
}
?>
