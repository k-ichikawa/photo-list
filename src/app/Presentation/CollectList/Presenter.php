<?php
declare(strict_types=1);

namespace App\Presentation\CollectList;

use App\Application\UseCases\CollectList\UseCaseOutput;
use App\Presentation\PhotoSetPresenter;

class Presenter
{
    static function create(UseCaseOutput $useCaseOutput): ViewModel
    {
        $viewModel = new ViewModel();

        $photoSetList = [];
        foreach($useCaseOutput->collectPhotoSetList as $photoSet) {
            $photoSetList[] = PhotoSetPresenter::create($photoSet);
        }

        $viewModel->photoSetList = $photoSetList;

        return $viewModel;
    }
}