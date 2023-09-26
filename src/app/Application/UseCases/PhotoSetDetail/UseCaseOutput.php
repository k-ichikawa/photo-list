<?php
declare(strict_types=1);

namespace App\Application\UseCases\PhotoSetDetail;

use App\Domain\PhotoSetDetail;

class UseCaseOutput
{
    /**
     * @param PhotoSetDetail $photoSetDetail
     */
    public function __construct(readonly PhotoSetDetail $photoSetDetail){}
}
