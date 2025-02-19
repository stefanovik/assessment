<?php

namespace App\Http\Controllers;

use App\Services\ScreenOneServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScreenOneController extends Controller
{
    public function __construct(
        private readonly ScreenOneServiceInterface $screenOneService,
    )
    {
    }

    public function index(Request $request): JsonResponse
    {
        $searchInput = $request->query('search');
        $data = $this->screenOneService->getData();

        if ($searchInput && $searchInput !== '') {
            $data = $data->filter(fn ($item) =>
            str_contains($item['id'], $searchInput)
            || str_contains($item['title'], $searchInput) || str_contains($item['notes'], $searchInput));
        }


        return new JsonResponse($data);
    }
}
