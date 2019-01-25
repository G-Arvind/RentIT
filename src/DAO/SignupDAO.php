<?php
namespace App\DAO;

use App\Util\Connect;
use App\Util\UserUtil;

class SignupDAO{


	function addUser($user){
        $userutil=new UserUtil();
    //echo var_dump($user);
    $resp=$userutil->signup($user);

    return $resp;

	}
}
?>