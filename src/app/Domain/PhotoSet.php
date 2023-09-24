<?php
declare(strict_types=1);

namespace App\Domain;

class PhotoSet
{
    private int $collectListId;
    private string $photoSeriesName;
    private string $photoSeriesImageUrl;
    private FullName $member;

    public function __construct(
        int $collectListId,
        string $photoSeriesName,
        string $photoSeriesImageUrl,
        FullName $member
    ) {
        $this->collectListId = $collectListId;
        $this->photoSeriesName = $photoSeriesName;
        $this->photoSeriesImageUrl = $photoSeriesImageUrl;
        $this->member = $member;
    }

    public function getCollectListId(): int
    {
        return $this->collectListId;
    }

    public function getPhotoSeriesName(): string
    {
        return $this->photoSeriesName;
    }

    public function getPhotoSeriesImageUrl(): string
    {
        return $this->photoSeriesImageUrl;
    }

    public function getMember(): FullName
    {
        return $this->member;
    }
}
