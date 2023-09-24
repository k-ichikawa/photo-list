<?php
declare(strict_types=1);

namespace App\Application\UseCases\CollectList;

use App\Domain\PhotoSet;

class UseCaseOutput
{
    /**
     * @param PhotoSet[] $collectPhotoSetList
     */
    public function __construct(readonly array $collectPhotoSetList){}
}
