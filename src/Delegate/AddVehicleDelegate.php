<?php
namespace App\Delegate;

use App\Util\Connect;
use App\Dao\VehicleDao;

class AddVehicleDelegate{

	 private $vehicle;

	 function __construct(){
	 	
        $this->vehicle= new VehicleDao();

    }


	function addNewVehicle($vehiclemodel){
    //echo var_dump($user);

    $resp=$this->vehicle->addVehicleDetails($vehiclemodel);

    $last_id=$resp["last_id"];

    $resp=$this->vehicle->addVehicle($vehiclemodel,$last_id);

    return $resp;

	}
}
?>