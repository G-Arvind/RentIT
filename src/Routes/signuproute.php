<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



use App\DAO\UserDAO;
use App\Model\UserModel;
use App\Controller\SignupController;

$app->post('/signup', function (Request $request, Response $response, array $args) {
    
    $signupController=new SignupController();

    $responseArray=$signupController->addNewUserController($request);

    $response=$response->withJson($responseArray);
   
   return $response;
    
});

?>