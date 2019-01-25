<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



//use App\DAO\ShopDAO;
//use App\Model\ShopModel;
use App\Controller\EditShopController;

$app->put('/editShop/{aid}/{rid}', function (Request $request, Response $response, array $args) {

    $editshopController=new EditShopController();

    $responseArray=$editshopController->editShop($request,$args);

    $response=$response->withJson($responseArray);
   
   return $response;
    
});

?>