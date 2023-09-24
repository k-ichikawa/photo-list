<?php
declare(strict_types=1);

namespace App\Application\UseCases\WantList;

interface UseCaseInput
{
    public function handle(int $userId): UseCaseOutput;
}