<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


//use App\DAO\UserDAO;
use App\Controller\DeleteShopController;

$app->delete('/deleteShop/{shopid}/{addressid}', function (Request $request, Response $response, array $args) {

	$deleteShopController=new DeleteShopController();

    $responseArray=$deleteShopController->deleteShop($request,$args);
    
    $response=$response->withJson($responseArray);
    return $response;

  
});

?>