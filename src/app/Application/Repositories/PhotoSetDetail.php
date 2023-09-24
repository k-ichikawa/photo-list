<?php
declare(strict_types=1);

namespace App\Application\Repositories;

use App\Domain\Photo;

interface PhotoSetDetail
{
    public function get(int $collectListId): PhotoSetDetailResultDto;
}

class PhotoSetDetailResultDto
{
    /**
     * @param Photo[] $photos
     */
    public function __construct(readonly array $photos) {}
}
