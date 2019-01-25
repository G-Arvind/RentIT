<?php
namespace App\Util;

use App\Util\Connect;

class SqlOp{
	public $conn;
       public function __construct(){
			$db=new Connect();
            $this->conn=$db->getCon();

		}

	function insert($table_name,$attributes,$values){

		for($i=0;$i<count($values);$i++){
				if(is_string($values[$i]))
				$values[$i]='"'.mysqli_real_escape_string($this->conn,$values[$i]).'"';
			}
			$query='INSERT INTO '.$table_name.'('.join(',',$attributes).') VALUES('.join(',',$values).');';
				$resp=null;
				//echo $query;
				if ($this->conn->query($query) === TRUE) {
					//echo ($query);
					$last_id = $this->conn->insert_id;
				    $resp=array("response"=>1,"message"=>"success","last_id"=>$last_id);
				} else {
					//echo ($query);
					$resp=array("response"=>0,"message"=>'error in '.$this->conn->error);
				}
				return $resp;
	}

	public function select($object){
            $tablename=$object['table_name'];
            $fields=$object['fields'];
            $query='SELECT '.join(',',$fields).' FROM '.$tablename.' ';
            
            
            if(array_key_exists("where", $object)){
                $where=$object['where'];
                foreach ($where as $key => $value) {
                    if(is_string($value))
                        $value='"'.$value.'"';
                    $query=$query.' WHERE '.$key.'='.$value;
                }
            }
            $query=$query.' ;';
            //echo $query;
            $resp=array();
            try{
                $result=$this->conn->query($query);
                if($result === FALSE){
                    throw new \Exception($query);
                }
                while($row = $result->fetch_assoc()){
                array_push($resp, $row);
                }
                return $resp;
            }
            catch(Exception $e) {
                //...
                return array('response'=>0,'message'=>$e);
            }
        }	
	
	
	function update(){

	}
	function delete(){

	}
		

}
?>