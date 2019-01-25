<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


use App\Util\Connect;
use App\Util\UserUtil;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->post('/search', function (Request $request, Response $response, array $args) {
    
    $data=$request->getParsedBody();
    $city = $data['city'];
    print_r($city);

    $db=new Connect();
    $con=$db->getCon();

  //  $sql="";
//    var_dump($db->getCon());

    
    
   // $response->getBody()->write("Hello");

    return $response;
});


?>
