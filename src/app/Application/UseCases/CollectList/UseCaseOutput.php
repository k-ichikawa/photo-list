<?php
declare(strict_types=1);

namespace App\Application\UseCases\CollectList;

use App\Domain\PhotoSet;

class UseCaseOutput
{
    /** @var PhotoSet[] $photoSet */
    private array $collectPhotoSetList;

    /**
     * @param PhotoSet[] $collectPhotoSetList
     */
    public function __construct(array $collectPhotoSetList)
    {
        $this->collectPhotoSetList = $collectPhotoSetList;
    }

    /**
     * @return PhotoSet[]
     */
    public function getCollectPhotoSetList(): array
    {
        return $this->collectPhotoSetList;
    }
}