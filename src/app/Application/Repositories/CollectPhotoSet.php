<?php
declare(strict_types=1);

namespace App\Application\Repositories;

use App\Domain\PhotoSet;

interface CollectPhotoSet
{
    public function get(int $userId): CollectPhotoSetResultDto;
}

class CollectPhotoSetResultDto
{
    /** @var PhotoSet[] $collectPhotoSetList */
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