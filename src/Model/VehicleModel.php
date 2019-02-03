<?php 
namespace App\Model;


class VehicleModel{

	const ATTRIBUTES=array("vname","vmanufacturer","vcolor","is_auto","vcc");

	const VEHICLE_ATTRIBUTES=array("vdetails_id","vno","rid","vpic","vavail","is_car","vprice");

	private $rid,$uid,$vno,$vavail,$vtype,$vrent,$vname,$vman,$vcolor,$vmode,$vcc;

	public function setShopUId($uid){
         $this->uid=$uid;
	}
	public function setShopRid($rid){
         $this->rid=$rid;
	}
	public function setVehicleNo($vno){
         $this->vno=$vno;
	}
	public function setVehicleAvail($vavail){
         $this->vavail=$vavail;
	}
	public function setVehicleType($vtype){
         $this->vtype=$vtype;
	}	
	public function setVehicleRent($vrent){
         $this->vrent=$vrent;
	}
	public function setVehicleName($vname){
         $this->vname=$vname;
	}
	public function setVehicleMan($vman){
         $this->vman=$vman;
	}
	public function setVehicleColor($vcolor){
         $this->vcolor=$vcolor;
	}
	public function setVehicleMode($vmode){
         $this->vmode=$vmode;
	}
	public function setVehicleCC($vcc){
         $this->vcc=$vcc;
	}
    

    //GETTERS

    public function getShopUId(){
         return $this->uid;
	}
	public function getShopRid(){
         return $this->rid;
	}
	public function getVehicleNo(){
         return $this->vno;
	}
	public function getVehicleAvail(){
         return $this->vavail;
	}
	public function getVehicleType(){
         return $this->vtype;
	}	
	public function getVehicleRent(){
         return $this->vrent;
	}
	public function getVehicleName(){
         return $this->vname;
	}
	public function getVehicleMan(){
         return $this->vman;
	}
	public function getVehicleColor(){
         return $this->vcolor;
	}
	public function getVehicleMode(){
         return $this->vmode;
	}
	public function getVehicleCC(){
         return $this->vcc;
	}
    
}
?>
