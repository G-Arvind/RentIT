<?php
namespace App\Util;

use App\Util\SqlOp;

class UserUtil{

    private $email,$pass,$fname,$phno,$type;
 
    public function signup($user){

        $this->email=$user->getUserEmail();
        $this->hashed_password=$user->getUserPass();
        $this->fname=$user->getUserName();
        $this->phno=$user->getUserPhno();
        $this->type=$user->getUserType();

        // $db=new Connect();
        // $con=$db->getCon();
         
        //$userAttributes=array($user::NAME,$user::EMAIL,$user::PASSWORD,$user::PHONE,$user::TYPE);
        $userValues=array($this->fname,$this->email,$this->hashed_password,$this->phno,$this->type);

    
        // $sql="INSERT INTO users (uname,uemail,upass,uphno,type) VALUES ('$fname','$email','$hashed_password','$phno','$type');";

        $sqlop=new SqlOp();
        return $sqlop->insert("users",$user::ATTRIBUTES,$userValues);

    }
    public function login($email,$password){


        $sqlop=new SqlOp();

        $object=array("table_name"=>"users","fields"=>array("*"),"where"=>array("uemail"=>$email));
            $result=$sqlop->select($object);
            
          if(count($result)==1 &&  password_verify($password,$result[0]['upass'])){
            


                $type=$result[0]['type'];
            
                 $uid=$result[0]['uid'];
      


         return(array("response"=>1,"message"=>"login success","type"=>$type,"uid"=>$uid));
     }
     else{
         return(array("response"=>0,"message"=>"login error :".$con->error));
     }
                
                

       //  $db=new Connect();
       // $con=$db->getCon();

      



    
    //   $sql="SELECT * FROM users WHERE uemail='$email';";

    //   $result=$con->query($sql);

    //         if($result){

    //             $result=$result->fetch_assoc();


    //             $type=$result['type'];
            
    //             $uid=$result['uid'];;
      


    //     return(array("response"=>1,"message"=>"login success","type"=>$type,"uid"=>$uid));
    // }
    // else{
    //     return(array("response"=>0,"message"=>"login error :".$con->error));
    // }
    }
}

?>