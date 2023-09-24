<?php
declare(strict_types=1);

namespace App\Domain;

class FullName
{
    readonly string $value;

    public function __construct(string $firstName, string $lastName)
    {
        $this->value = $lastName.' '.$firstName;
    }
}
