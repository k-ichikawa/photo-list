<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CollectListController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            [
                'thumbnail' => '/image/sample.jpg',
                'title' => '「One choice」MV衣装'
            ],
            [
                'thumbnail' => '/image/sample.jpg',
                'title' => '「シーラカンス」MV衣装'
            ],
            [
                'thumbnail' => '/image/sample.jpg',
                'title' => '「ってか」MV衣装'
            ],
            [
                'thumbnail' => '/image/sample.jpg',
                'title' => '「僕なんか」MV衣装'
            ],
        ]);
    }
}
