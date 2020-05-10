<?php

namespace App\Http\Controllers;

class CorsController extends Controller {

    public function __invoke()
    {
        return response()->json(null);
    }
}