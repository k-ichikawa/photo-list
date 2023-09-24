<?php
declare(strict_types=1);

namespace App\Domain;

class PhotoSet
{
    public function __construct(
        readonly int $collectListId,
        readonly string $photoSeriesName,
        readonly string $photoSeriesImageUrl,
        readonly FullName $member
    ) {}
}
