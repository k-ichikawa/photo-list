<?php
declare(strict_types=1);

namespace App\Application\UseCases\WantList;

use App\Application\Repositories\WantPhotoSetInterface;

class UseCase implements UseCaseInput
{
    function __construct(protected WantPhotoSetInterface $wantPhotoSetRepository) {}

    public function handle(int $userId): UseCaseOutput
    {
        $result = $this->wantPhotoSetRepository->get($userId);

        return new UseCaseOutput($result->getWantPhotoSetList());
    }
}