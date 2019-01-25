<?php 
namespace App\Model;

class ShopModel{

	const ADDRESS_ATTRIBUTES=array("rno","rstreet","rarea","rcity","rzip");

	const SHOP_ATTRIBUTES=array("rname","remail","rphno","description","uid","aid");
    


	// const RETAIL_NUM="rno";
	// const RETAIL_STREET="rstreet";
	// const RETAIL_AREA="rarea";
 //    const RETAIL_CITY="rcity";
 //    const RETAIL_ZIP="rzip";


    // const RETAIL_NAME="rname";
    // const RETAIL_EMAIL="remail";
    // const RETAIL_PHONE="rphno";
    // const RETAIL_DESCRIPTION="description";
    // const UID="uid";
    // const AID="aid";

	private $uid,$rname,$remail,$rdesc,$rphno,$rno,$rstreet,$rarea,$rcity,$rpin;

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
