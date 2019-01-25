<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



use App\DAO\ShopDAO;
use App\Model\ShopModel;
use App\Controller\ShopController;

$app->post('/addShop', function (Request $request, Response $response, array $args) {

    $shopController=new ShopController();

    $responseArray=$shopController->addShopController($request);

    $response=$response->withJson($responseArray);
   
   return $response;
    
});

?>