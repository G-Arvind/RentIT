<?php

namespace App\Controller;

use App\Delegate\AddVehicleDelegate;
use App\Model\VehicleModel;

class VehicleController{

    public $shopmodel,$shop;

    function __construct(){

        $this->vehiclemodel=new VehicleModel();
        $this->vehicle=new AddVehicleDelegate();

    }

	public function addVehicleController($request)
	{
	  $data=$request->getParsedBody();

    //var_dump($data);

    $rid=$data['rid'];

    $vno=$data['vno'];
    $vavail = $data['vavail'];
    $vtype = $data['vtype'];
    $vrent=$data['vrent'];

    $vname=$data['vname'];
    $vman=$data['vman'];
    $vcolor=$data['vcolor'];
    $vmode=$data['vmode'];
    $vcc=$data['vcc'];

    
   // $shopmodel=new ShopModel();
    
    //$this->vehiclemodel->setShopUId($uid);
    $this->vehiclemodel->setShopRid($rid);

    $this->vehiclemodel->setVehicleNo($vno);

    $this->vehiclemodel->setVehicleAvail($vavail);

    $this->vehiclemodel->setVehicleType($vtype);

    $this->vehiclemodel->setVehicleRent($vrent);

    $this->vehiclemodel->setVehicleName($vname);

    $this->vehiclemodel->setVehicleMan($vman);

    $this->vehiclemodel->setVehicleColor($vcolor);

    $this->vehiclemodel->setVehicleMode($vmode);

    $this->vehiclemodel->setVehicleCC($vcc);


  //  $shop=new ShopDAO();
    $responseArray=$this->vehicle->addNewVehicle($this->vehiclemodel);
	
	return $responseArray;

}
}
?>