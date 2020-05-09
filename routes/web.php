<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return response()->json([
        'message' => 'I only exist to help you generate links for paynow payment buttons. Please check https://github.com/Berzel/paynow-button for more details.'
        ], 200);
});

$router->post('v1/generate-paynow-link', [
    'uses' => 'GenerateLinkController'
]);

$router->options('v1/generate-paynow-link', function () use ($router) {
    return response()->json([
        'message' => 'good'
    ]);
});
