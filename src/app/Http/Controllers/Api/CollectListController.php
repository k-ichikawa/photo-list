<?php

namespace App\Http\Controllers\Api;

use App\Application\UseCases\CollectList\UseCaseInput;
use App\Http\Controllers\Controller;
use App\Presentation\CollectList\Presenter;
use Illuminate\Http\JsonResponse;

class CollectListController extends Controller
{
    public function __construct(protected UseCaseInput $inputPort) {}

    public function index(): JsonResponse
    {
        $useCaseOutput = $this->inputPort->handle(1);
        $viewModel = Presenter::create($useCaseOutput);

        return response()->json($viewModel);
    }
}
