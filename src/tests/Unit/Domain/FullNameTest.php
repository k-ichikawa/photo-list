<?php
declare(strict_types=1);

namespace Tests\Unit\Domain;

use App\Domain\FullName;
use PHPUnit\Framework\TestCase;

class FullNameTest extends TestCase
{
    public function providerFor_testConstruct_setCorrectValue(): array
    {
        return [
            ['hoge', 'fuga', 'fuga hoge'],
        ];
    }

    /**
     * @dataProvider providerFor_testConstruct_setCorrectValue
     */
    public function testConstruct_setCorrectValue(
        string $firstName,
        string $lastName,
        string $expected
    ) {
        self::assertSame($expected, (new FullName($firstName, $lastName))->getValue());
    }
}
