<?php
declare(strict_types=1);

namespace App\Presentation;

class PhotoViewModel
{
    public int $photoId;
    public bool $hasPhoto;
    public string $imageUrl;
    public string $pose;
    public string $memberName;
}
