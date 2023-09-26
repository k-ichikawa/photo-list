<?php
declare(strict_types=1);

namespace App\Presentation\PhotoSetDetail;

use App\Presentation\PhotoContentViewModel;

class ViewModel
{
    public string $memberName;

    public string $photoSeriesName;

    /** @var PhotoContentViewModel[] $photoSetDetail */
    public array $photoContents;
}
