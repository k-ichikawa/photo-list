<?php
declare(strict_types=1);

namespace App\Application\UseCases\CollectList;

use App\Application\Repositories\CollectPhotoSet;

class UseCase implements UseCaseInput
{
    function __construct(protected CollectPhotoSet $collectPhotoSetRepository) {}

    public function handle(int $userId): UseCaseOutput
    {
        $result = $this->collectPhotoSetRepository->get($userId);

        return new UseCaseOutput($result->getCollectPhotoSetList());
    }
}