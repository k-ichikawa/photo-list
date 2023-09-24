<?php
declare(strict_types=1);

namespace App\Presentation\WantList;

use App\Application\UseCases\WantList\UseCaseOutput;
use App\Presentation\PhotoSetPresenter;

class Presenter
{
    static function create(UseCaseOutput $useCaseOutput): ViewModel
    {
        $viewModel = new ViewModel();

        $photoSetList = [];
        foreach($useCaseOutput->wantPhotoSetList as $photoSet) {
            $photoSetList[] = PhotoSetPresenter::create($photoSet);
        }

        $viewModel->photoSetList = $photoSetList;

        return $viewModel;
    }
}