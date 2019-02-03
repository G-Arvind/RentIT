<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


//use App\DAO\ShopDAO;
//use App\Model\ShopModel;
use App\Controller\VehicleController;

$app->post('/addVehicle', function (Request $request, Response $response, array $args) {

    $vehileController=new VehicleController();

    $responseArray=$vehileController->addVehicleController($request);

    $response=$response->withJson($responseArray);
   
   return $response;
    
});

?>