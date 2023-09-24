<?php
declare(strict_types=1);

namespace App\Application\UseCases\PhotoSetDetail;

interface UseCaseInput
{
    public function handle(int $collectId): UseCaseOutput;
}
