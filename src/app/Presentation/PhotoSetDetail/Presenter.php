<?php
declare(strict_types=1);

namespace App\Presentation\PhotoSetDetail;

use App\Application\UseCases\PhotoSetDetail\UseCaseOutput;
use App\Presentation\PhotoPresenter;

class Presenter
{
    static function create(UseCaseOutput $useCaseOutput): ViewModel
    {
        $viewModel = new ViewModel();

        $photos = [];
        foreach($useCaseOutput->photos as $photo) {
            $photos[] = PhotoPresenter::create($photo);
        }

        $viewModel->photos = $photos;

        return $viewModel;
    }
}
