<?php
declare(strict_types=1);

namespace App\Application\UseCases\PhotoSetDetail;

use App\Application\Repositories\PhotoSetDetail;

class UseCase implements UseCaseInput
{
    function __construct(protected PhotoSetDetail $photoSetDetailRepository) {}

    public function handle(int $userId): UseCaseOutput
    {
        $result = $this->photoSetDetailRepository->get($userId);

        return new UseCaseOutput($result->photos);
    }
}
