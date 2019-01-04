<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get("/goods/", function (Request $request, Response $response){
    $sql = "SELECT * FROM goods";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "success", "data" => $result], 200);
});

$app->post("/goods/", function (Request $request, Response $response){

    $new_good = $request->getParsedBody();

    $sql = "INSERT INTO goods (name, price) VALUE (:name, :price)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":name" => $new_good["name"],
        ":price" => $new_good["price"]
    ];

    if($stmt->execute($data))
       return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

$app->put("/goods/{id}", function (Request $request, Response $response, $args){
    $id = $args["id"];
    $new_good = $request->getParsedBody();
    $sql = "UPDATE goods SET name=:name, price=:price WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":id" => $id,
        ":name" => $new_good["name"],
        ":price" => $new_good["price"]
    ];

    if($stmt->execute($data))
       return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

$app->delete("/goods/{id}", function (Request $request, Response $response, $args){
    $id = $args["id"];
    $sql = "DELETE FROM goods WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":id" => $id
    ];

    if($stmt->execute($data))
       return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});
