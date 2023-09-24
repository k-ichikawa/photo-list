<?php
declare(strict_types=1);

namespace App\Presentation;

use App\Domain\PhotoSet;

class PhotoSetPresenter
{
    static function create(PhotoSet $photoSet): PhotoSetViewModel
    {
        $viewModel = new PhotoSetViewModel();

        $viewModel->collectListId = $photoSet->collectListId;
        $viewModel->photoSeriesName = $photoSet->photoSeriesName;
        $viewModel->photoSeriesImageUrl = $photoSet->photoSeriesImageUrl;
        $viewModel->memberName = $photoSet->member->value;

        return $viewModel;
    }
}