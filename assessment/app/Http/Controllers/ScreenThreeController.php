<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScreenThreeController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse([
            'data' => 'This is screen 3',
        ]);
    }
}
