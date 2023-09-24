<?php
declare(strict_types=1);

namespace App\Presentation;

use App\Domain\PhotoSet;

class PhotoSetPresenter
{
    static function create(PhotoSet $photoSet): PhotoSetViewModel
    {
        $viewModel = new PhotoSetViewModel();

        $viewModel->collectListId = $photoSet->getCollectListId();
        $viewModel->photoSeriesName = $photoSet->getPhotoSeriesName();
        $viewModel->photoSeriesImageUrl = $photoSet->getPhotoSeriesImageUrl();
        $viewModel->memberName = $photoSet->getMember()->getValue();

        return $viewModel;
    }
}