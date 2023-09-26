<?php
declare(strict_types=1);

namespace App\Presentation;

use App\Domain\PhotoContent;

class PhotoContentPresenter
{
    static function create(PhotoContent $photoContent): PhotoContentViewModel
    {
        $viewModel = new PhotoContentViewModel;

        $viewModel->photoId = $photoContent->photoId;
        $viewModel->hasPhoto = $photoContent->hasPhoto;
        $viewModel->imageUrl = $photoContent->imageUrl;
        $viewModel->pose = $photoContent->pose->description();
        $viewModel->memberName = $photoContent->memberName->value;

        return $viewModel;
    }
}
