<?php
declare(strict_types=1);

namespace App\Application\Repositories;

use App\Domain\PhotoSet;

interface WantPhotoSet
{
    public function get(int $userId): WantPhotoSetResultDto;
}

class WantPhotoSetResultDto
{
    /** @var PhotoSet[] $wantPhotoSetList */
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