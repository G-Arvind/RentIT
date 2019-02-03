<?php
namespace App\Dao;

use App\Util\Connect;

use App\Util\SqlOp;

class VehicleDao{

    private $vno,$vavail,$vtype,$vrent;

    private $vname,$vman,$vcolor,$vmode,$vcc;

    private $last_id,$uid,$rid;


    public function addVehicleDetails($vehiclemodel){

        $this->rid=$vehiclemodel->getShopRid();

        $this->vname=$vehiclemodel->getVehicleName();
        $this->vman=$vehiclemodel->getVehicleMan();
        $this->vcolor=$vehiclemodel->getVehicleColor();
        $this->vmode=$vehiclemodel->getVehicleMode();

        if(strtoupper($this->vmode)=="MAN"){
          $this->vmode=0;
        }
        if(strtoupper($this->vmode)=="AUTO"){
          $this->vmode=1;
        }
        $this->vcc=$vehiclemodel->getVehicleCC();

        $vehicleDetailsValues=array($this->vname,$this->vman,$this->vcolor,$this->vmode,$this->vcc);

        $sql=new SqlOp();   
        return $sql->insert("vehicle_details",$vehiclemodel::ATTRIBUTES,$vehicleDetailsValues);

    }

    public function addVehicle($vehiclemodel,$last_id){

       // $this->uid=$shopmodel->getShopUId();
        $this->vno=$vehiclemodel->getVehicleNo();
        $this->vavail=$vehiclemodel->getVehicleAvail();
        $this->vtype=$vehiclemodel->getVehicleType();
        if(strtoupper($this->vtype)=="CAR"){
          $this->vtype=1;
        }
        if(strtoupper($this->vtype)=="BIKE"){
          $this->vtype=0;
        }
        $this->vrent=$vehiclemodel->getVehicleRent();
 
       // $NUM=1;

    $vehicleValues=array($last_id,$this->vno,$this->rid,"PIC",$this->vavail,$this->vtype,$this->vrent);

        $sql=new SqlOp();
        return $sql->insert("vehicle",$vehiclemodel::VEHICLE_ATTRIBUTES,$vehicleValues);

}

    public function editAddress($shopmodel,$aid){

        $this->rno=$shopmodel->getShopNo();
        $this->rstreet=$shopmodel->getShopStreet();
        $this->rarea=$shopmodel->getShopArea();
        $this->rcity=$shopmodel->getShopCity();
        $this->rpin=$shopmodel->getShopPin();

            $db=new Connect();
            $this->conn=$db->getCon(); 

            $query="UPDATE address SET rno=\"".$this->rno."\",rstreet=\"".$this->rstreet."\", rarea=\"".$this->rarea."\",rcity=\"".$this->rcity."\", rzip=\"".$this->rpin."\" WHERE aid=".$aid.";";


            $result=$this->conn->query($query);
 
            if($result){
                      return(array("response"=>1,"message"=>"success"));
            }

            else{
                 return(array("response"=>0,"message"=>"error :".$conn->error));
            }    

    }


    public function editShop($shopmodel,$rid){

        // $this->uid=$shopmodel->getShopUId();
        $this->rname=$shopmodel->getShopName();
        $this->remail=$shopmodel->getShopEmail();
        $this->rdesc=$shopmodel->getShopDescripion();
        $this->rphno=$shopmodel->getShopPhno();

        // $shopAttribute=array($shopmodel::RETAIL_NAME,$shopmodel::RETAIL_EMAIL,$shopmodel::RETAIL_PHONE,$shopmodel::RETAIL_DESCRIPTION,$shopmodel::UID,$shopmodel::AID);

        $shopValues=array($this->rname,$this->remail,$this->rphno,$this->rdesc,$this->uid,$last_id);

            $db=new Connect();
            $this->conn=$db->getCon(); 

   // $query="UPDATE TABLE retail SET rname=".$this->rname." remail=".$this->remail." rphno=".$this->rphno."description=".$this->rdesc." WHERE rid=".$rid.";";

   $query="UPDATE retail SET rname=\"".$this->rname."\", remail=\"".$this->remail."\", rphno=\"".$this->rphno."\", description=\"".$this->rdesc."\" WHERE rid=".$rid.";";

   $result=$this->conn->query($query);

             if($result){

                      return(array("response"=>1,"message"=>"success"));
                 }
                 else{
         return(array("response"=>0,"message"=>"error :".$conn->error));
    }    
}


public function delete($rid,$aid){

            $db=new Connect();
            $this->conn=$db->getCon(); 

            $query="DELETE FROM retail WHERE rid=".$rid.";";
            $query1="DELETE FROM address WHERE aid=".$aid.";";
            
           // echo ($query1);

            $result=$this->conn->query($query);

        // echo(var_dump($result));

            if($result===true){
                 $result1=$this->conn->query($query1);

                 if($result1===true){

                      return(array("response"=>1,"message"=>"success"));
                 }

                 else{
         return(array("response"=>0,"message"=>"error :".$conn->error));
     }    
     }
     else{
      return(array("response"=>0,"message"=>"error :".$con->error));  
     }
}

   public function showshop($uid){

            $db=new Connect();
            $this->conn=$db->getCon(); 

            $query="SELECT * FROM address,retail WHERE address.aid=retail.aid and uid=".$uid.";";
            

            $result=$this->conn->query($query);

            $resp=array();

            while($row=$result->fetch_assoc()){
                array_push($resp, $row);
            }
           if(count($resp)>0){

                 //fecho  var_dump($resp);
            
                 // $rno=$result[0]['rno'];
            
                 // $rstreet=$result[0]['rstreet'];

                 //  $rarea=$result[0]['rarea'];
            
                 // $rcity=$result[0]['rcity'];

                 //  $rzip=$result[0]['rzip'];
            
                 // $rname=$result[0]['rname'];

                 // $remail=$result[0]['remail'];
            
                 // $rphno=$result[0]['rphno'];

                 // $description=$result[0]['description']; 


         return(array("response"=>1,"message"=>"success","result"=>$resp));
     }
     else{
         return(array("response"=>0,"message"=>"error :".$con->error));
     }
   }
}   

?>