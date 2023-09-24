<?php
declare(strict_types=1);

namespace App\Application\UseCases\WantList;

use App\Domain\PhotoSet;

class UseCaseOutput
{
    /** @var PhotoSet[] $photoSet */
    private array $wantPhotoSetList;

    /**
     * @param PhotoSet[] $wantPhotoSetList
     */
    public function __construct(array $wantPhotoSetList)
    {
        $this->wantPhotoSetList = $wantPhotoSetList;
    }

    /**
     * @return PhotoSet[]
     */
    public function getWantPhotoSetList(): array
    {
        return $this->wantPhotoSetList;
    }
}