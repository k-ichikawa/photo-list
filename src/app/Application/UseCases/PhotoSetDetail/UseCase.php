<?php
declare(strict_types=1);

namespace App\Application\UseCases\PhotoSetDetail;

use App\Application\Repositories\PhotoSetDetailInterface;

class UseCase implements UseCaseInput
{
    function __construct(protected PhotoSetDetailInterface $photoSetDetailRepository) {}

    public function handle(int $userId): UseCaseOutput
    {
        $result = $this->photoSetDetailRepository->get($userId);

        return new UseCaseOutput($result->photoSetDetail);
    }
}
