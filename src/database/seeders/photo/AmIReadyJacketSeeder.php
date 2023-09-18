<?php
declare(strict_types=1);

namespace Database\Seeders\Photo;

use Illuminate\Database\Seeder;
use App\Models\PhotoSeries;
use App\Models\Photo;
use App\Models\Member;
use DateTime;

class AmIReadyJacketSeeder extends Seeder
{
    public function run(): void
    {
        $now = new DateTime();

        $result = PhotoSeries::create(
            [
                'name' => '「Am I realdy?」ジャケット写真衣装', 
                'image_url' => 'https://storage-store.plusmember.jp/upload/images/hinata_2309_10th_B4fV2YTX_photo_01.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ]
        );

        $targetMembers = Member::select('id')->where('graduated', 0)->wherein('term', [1, 2, 3, 4])->get();

        $params = [];
        foreach($targetMembers as $member) {
            foreach([1, 2, 3, 4] as $poseType) {
                $params[] = [
                    'member_id' => $member->id,
                    'photo_series_id' => $result->id,
                    'pose' => $poseType,
                    'created_at' => $now,
                    'updated_at' => $now
                  ];
            }
        }

        Photo::insert($params);
    }
}
