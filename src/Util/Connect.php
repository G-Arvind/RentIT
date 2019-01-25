<?php 
namespace App\Util;
class Connect{

    public $con,$detail;

    function __construct(){

        $this->detail=parse_ini_file("config.ini");
        $this->con=new \mysqli($this->detail['servername'],$this->detail['username'],$this->detail['password'],$this->detail['dbname']);
        if($this->con->connect_error){
            die("Connection faled ". $con->connect_error);
        }
    }

    function getCon(){
        return $this->con;
    }

    function closeCon(){
         $this->con->close();
    }

}




?>
