<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Master\Member as MasterMember;
use App\Models\Member;
use DateTime;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        $now = new DateTime();
        $members = array_merge(MasterMember::FirstTerm, MasterMember::SecondTerm, MasterMember::ThirdTerm, MasterMember::FourthTerm);

        $params = [];
        foreach($members as $member) {
            $member['created_at'] = $now;
            $member['updated_at'] = $now;
            $params[] = $member;
        }

        Member::insert($params);
    }
}
