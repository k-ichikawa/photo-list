<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use DateTime;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        $now = new DateTime();
        $params = [
            ['first_name' => '井口', 'last_name' => '眞緒', 'term' => 1, 'graduated' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '潮', 'last_name' => '紗理菜', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '柿崎', 'last_name' => '芽実', 'term' => 1, 'graduated' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '影山', 'last_name' => '優佳', 'term' => 1, 'graduated' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '加藤', 'last_name' => '史帆', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '齊藤', 'last_name' => '京子', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '佐々木', 'last_name' => '久美', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '佐々木', 'last_name' => '美玲', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '高瀬', 'last_name' => '愛奈', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '高本', 'last_name' => '彩花', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '長濱', 'last_name' => 'ねる', 'term' => 1, 'graduated' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '東村', 'last_name' => '芽依', 'term' => 1, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '金村', 'last_name' => '美玖', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '河田', 'last_name' => '陽菜', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '小坂', 'last_name' => '菜緒', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '富田', 'last_name' => '鈴花', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '丹生', 'last_name' => '明里', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '濱岸', 'last_name' => 'ひより', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '松田', 'last_name' => '好花', 'term' => 2, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '宮田', 'last_name' => '愛萌', 'term' => 2, 'graduated' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '渡邉', 'last_name' => '美穂', 'term' => 2, 'graduated' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '上村', 'last_name' => 'ひなの', 'term' => 3, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '髙橋', 'last_name' => '未来虹', 'term' => 3, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '森本', 'last_name' => '茉莉', 'term' => 3, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '山口', 'last_name' => '陽世', 'term' => 3, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '石塚', 'last_name' => '瑶季', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '岸', 'last_name' => '帆夏', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '小西', 'last_name' => '夏菜実', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '清水', 'last_name' => '理央', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '正源司', 'last_name' => '陽子', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '竹内', 'last_name' => '希来里', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '平尾', 'last_name' => '帆夏', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '平岡', 'last_name' => '海月', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '藤嶌', 'last_name' => '果穂', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '宮地', 'last_name' => 'すみれ', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '山下', 'last_name' => '葉留花', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['first_name' => '渡辺', 'last_name' => '莉奈', 'term' => 4, 'graduated' => 0, 'created_at' => $now, 'updated_at' => $now],
        ];

        Member::insert($params);
    }
}
