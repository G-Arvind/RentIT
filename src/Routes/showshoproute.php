<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


//use App\DAO\UserDAO;
use App\Controller\ShowShopController;

$app->get('/admin/{uid}/shops', function (Request $request, Response $response, array $args) {

	$uid=$args['uid'];
	
	$showshopController=new ShowShopController();

    $responseArray=$showshopController->showShop($request,$args);
    
    $response=$response->withJson($responseArray);
    
    return $response;

  
});

?>