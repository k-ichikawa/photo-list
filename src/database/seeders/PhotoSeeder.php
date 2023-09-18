<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Photo\AmIReadyMVSeeder;
use Database\Seeders\Photo\AmIReadyJacketSeeder;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        (new AmIReadyMVSeeder())->run();
        (new AmIReadyJacketSeeder())->run();
    }
}
