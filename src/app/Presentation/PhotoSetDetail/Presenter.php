<?php
declare(strict_types=1);

namespace App\Presentation\PhotoSetDetail;

use App\Application\UseCases\PhotoSetDetail\UseCaseOutput;
use App\Presentation\PhotoContentPresenter;

class Presenter
{
    static function create(UseCaseOutput $useCaseOutput): ViewModel
    {
        $viewModel = new ViewModel();
        $viewModel->memberName = $useCaseOutput->photoSetDetail->member->value;
        $viewModel->photoSeriesName = $useCaseOutput->photoSetDetail->photoSeriesName;

        $photoContents = [];
        foreach($useCaseOutput->photoSetDetail->photoContent as $photoContent) {
            $photoContents[] = PhotoContentPresenter::create($photoContent);
        }

        $viewModel->photoContents = $photoContents;

        return $viewModel;
    }
}
