<?php 
namespace App\Model;

class AddressModel{

	private const ADDRESS_ATTRIBUTES=array("rno","rstreet","rarea","rcity","rzip");


    public function getAddressAttributes(){
    	return $this::ADDRESS_ATTRIBUTES;
    }
  

	private $rno,$rstreet,$rarea,$rcity,$rpin;

	
	public function setShopNo($rno){
         $this->rno=$rno;
	}
	public function setShopStreet($rstreet){
         $this->rstreet=$rstreet;
	}
	public function setShopArea($rarea){
         $this->rarea=$rarea;
	}
	public function setShopCity($rcity){
         $this->rcity=$rcity;
	}
	public function setShopPin($rpin){
         $this->rpin=$rpin;
	}
    

    //GETTERS

    
	public function getShopNo(){
         return $this->rno;
	}
	public function getShopStreet(){
         return $this->rstreet;
	}
	public function getShopArea(){
         return  $this->rarea;
	}
	public function getShopCity(){
         return $this->rcity;
	}
	public function getShopPin(){
         return $this->rpin;
	}
}
?>
