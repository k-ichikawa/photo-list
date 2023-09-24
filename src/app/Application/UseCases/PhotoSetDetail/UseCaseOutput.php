<?php
declare(strict_types=1);

namespace App\Application\UseCases\PhotoSetDetail;

use App\Domain\Photo;

class UseCaseOutput
{
    /**
     * @param Photo[] $photos
     */
    public function __construct(readonly array $photos){}
}
