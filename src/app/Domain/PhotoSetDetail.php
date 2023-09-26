<?php
declare(strict_types=1);

namespace App\Domain;

class PhotoSetDetail
{
    /**
     * @param PhotoContent[] $photo
     */
    public function __construct(
        readonly FullName $member,
        readonly array $photoContent
    ) {}
}
