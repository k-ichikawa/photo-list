<?php

namespace App\Http\Controllers\Api;

use App\Application\UseCases\PhotoSetDetail\UseCaseInput;
use App\Http\Controllers\Controller;
use App\Presentation\PhotoSetDetail\Presenter;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PhotoSetDetailController extends Controller
{
    public function __construct(protected UseCaseInput $inputPort) {}

    public function index(Request $request): JsonResponse
    {
        // $useCaseOutput = $this->inputPort->handle($request->input('collectListId'));
        $useCaseOutput = $this->inputPort->handle(1);
        $viewModel = Presenter::create($useCaseOutput);

        return response()->json($viewModel);
    }
}
