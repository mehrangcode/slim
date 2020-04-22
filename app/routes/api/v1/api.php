<?php

$app->get('/api', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello From API!');
});
$app->get('/api/show', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello From Show Api');
});