<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


use App\DAO\UserDAO;
use App\Controller\LoginController;

$app->post('/login', function (Request $request, Response $response, array $args) {

	$loginController=new LoginController();

    $responseArray=$loginController->loginUser($request);
    
    $response=$response->withJson($responseArray);
    return $response;

  
});

?>