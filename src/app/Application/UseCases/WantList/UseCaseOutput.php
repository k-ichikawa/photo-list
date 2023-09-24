<?php
declare(strict_types=1);

namespace App\Application\UseCases\WantList;

use App\Domain\PhotoSet;

class UseCaseOutput
{
    /**
     * @param PhotoSet[] $wantPhotoSetList
     */
    public function __construct(readonly array $wantPhotoSetList){}
}
