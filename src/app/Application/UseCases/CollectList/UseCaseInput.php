<?php
declare(strict_types=1);

namespace App\Application\UseCases\CollectList;

interface UseCaseInput
{
    public function handle(int $userId): UseCaseOutput;
}