<?php

$app->get('/api', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello From API!');
});
$app->get('/api/show', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello From Show Api');
});


$app->post('/api/users/login', function ($request, $response, $args) {
    $data = array('message' => 'Bob', 'age' => 40);
    return $response->withStatus(500)->withJson($data);
});

