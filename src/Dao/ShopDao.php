<?php
namespace App\Dao;

use App\Util\Connect;
use App\Util\SqlOp;

class ShopDao{

    private $rno,$rstreet,$rarea,$rcity,$rpin;

    private $rname,$remail,$rdesc,$rphno,$last_id,$uid;

    public function addAddress($addressmodel){

        $this->rno=$addressmodel->getShopNo();
        $this->rstreet=$addressmodel->getShopStreet();
        $this->rarea=$addressmodel->getShopArea();
        $this->rcity=$addressmodel->getShopCity();
        $this->rpin=$addressmodel->getShopPin();

        $addressVAlues=array($this->rno,$this->rstreet,$this->rarea,$this->rcity,$this->rpin);

        $sql=new SqlOp();
        return $sql->insert("address",$addressmodel->getAddressAttributes(),$addressVAlues);

    }

    public function addShop($shopmodel,$last_id){

        $this->uid=$shopmodel->getShopUId();
        $this->rname=$shopmodel->getShopName();
        $this->remail=$shopmodel->getShopEmail();
        $this->rdesc=$shopmodel->getShopDescripion();
        $this->rphno=$shopmodel->getShopPhno();

        $shopValues=array($this->rname,$this->remail,$this->rphno,$this->rdesc,$this->uid,$last_id);

        $sql=new SqlOp();
        return $sql->insert("retail",$shopmodel->getShopAttributes(),$shopValues);

}

    public function editAddress($addressmodel,$aid){

        $this->rno=$addressmodel->getShopNo();
        $this->rstreet=$addressmodel->getShopStreet();
        $this->rarea=$addressmodel->getShopArea();
        $this->rcity=$addressmodel->getShopCity();
        $this->rpin=$addressmodel->getShopPin();

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