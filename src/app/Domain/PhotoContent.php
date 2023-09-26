<?php
declare(strict_types=1);

namespace App\Domain;

class PhotoContent
{
    readonly bool $hasPhoto;
    readonly string $imageUrl;
    readonly Pose $pose;

    public function __construct(
        readonly int $photoId,
        private readonly int $hasPhotoFromDb,
        private readonly ?string $imageUrlFromDb,
        private readonly string $poseFromDb,
        readonly FullName $memberName
    ) {
        $this->hasPhoto = (bool)$hasPhotoFromDb;
        $this->imageUrl = $imageUrlFromDb ?? '/image/no_image.jpg';
        $this->pose = Pose::tryFrom((int)$poseFromDb);
    }
}

enum Pose: int
{
    case CLOSE = 1;
    case MEDIUM = 2;
    case SIT = 3;
    case PULL = 4;

    public function description(): string
    {
        return match($this) {
            self::CLOSE => 'ヨリ',
            self::MEDIUM => 'チュウ',
            self::SIT => '座り',
            self::PULL => 'ヒキ',
        };
    }
}
