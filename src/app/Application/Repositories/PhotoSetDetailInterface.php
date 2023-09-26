<?php
declare(strict_types=1);

namespace App\Application\Repositories;

use App\Domain\PhotoSetDetail;

interface PhotoSetDetailInterface
{
    public function get(int $collectListId): PhotoSetDetailResultDto;
}

class PhotoSetDetailResultDto
{
    /**
     * @param PhotoSetDetail $photoSetDetail
     */
    public function __construct(readonly PhotoSetDetail $photoSetDetail) {}
}
