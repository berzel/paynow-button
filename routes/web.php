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
        'about' => 'API used to generate Paynow payment button links.',
        'links' => [
            [
                'rel' => 'self',
                'href' => url('/'),
                'type' => 'GET'
            ],
            [
                'rel' => 'help',
                'href' => 'https://github.com/Berzel/paynow-button',
                'type' => 'GET'
            ],
            [
                'rel' => 'paynow-docs',
                'href' => 'https://developers.paynow.co.zw/docs/simple_paynow_request_button.html',
                'type' => 'GET'
            ],
            [    
                'rel' => 'v1',
                'href' => url('v1'),
                'type' => 'GET'
            ],
            [
                'rel' => 'v2',
                'href' => url('v2'),
                'type' => 'GET'
            ]
        ]
    ]);
});

/**
 * API Version 2
 */
$router->post('v2/links', [
    'uses' => 'v2\GenerateLinkController'
]);

$router->get('v2', function () use ($router) {
    return response()->json([
        'links' => [
            [
                'rel' => 'self',
                'href' => url('v2'),
                'type' => 'GET' 
            ],
            [
                'rel' => 'generate-paynow-link',
                'href' => url('v2/links'),
                'type' => 'POST'
            ]
        ]
    ]);
});

/**
 * API Version 1
 */
$router->post('v1/generate-paynow-link', [
    'uses' => 'v1\GenerateLinkController'
]);

$router->get('v1', function () use ($router) {
    return response()->json([
        'links' => [
            [
                'rel' => 'self',
                'href' => url('v1'),
                'type' => 'GET' 
            ],
            [
                'rel' => 'generate-paynow-link',
                'href' => url('v1/generate-paynow-link'),
                'type' => 'POST'
            ]
        ]
    ]);
});
