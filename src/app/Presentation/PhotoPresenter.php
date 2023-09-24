<?php
declare(strict_types=1);

namespace App\Presentation;

use App\Domain\Photo;

class PhotoPresenter
{
    static function create(Photo $photo): PhotoViewModel
    {
        $viewModel = new PhotoViewModel;

        $viewModel->photoId = $photo->photoId;
        $viewModel->hasPhoto = $photo->hasPhoto;
        $viewModel->imageUrl = $photo->imageUrl;
        $viewModel->pose = $photo->pose->description();
        $viewModel->memberName = $photo->memberName->value;

        return $viewModel;
    }
}
