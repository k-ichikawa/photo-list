<?php
declare(strict_types=1);

namespace App\Gateways;

use App\Application\Repositories\CollectPhotoSet;
use App\Application\Repositories\CollectPhotoSetResultDto;
use App\Domain\FullName;
use App\Domain\PhotoSet;
use App\Models\CollectList;
use Illuminate\Support\Facades\DB;

class CollectPhotoSetImpl implements CollectPhotoSet
{
    public function get(int $userId): CollectPhotoSetResultDto
    {
        $results = CollectList::select([
            DB::raw('MIN(collect_list.id) as collect_list_id'),
            'photo_series.name as photo_series_name',
            'photo_series.image_url as photo_series_image_url',
            'member.first_name as first_name',
            'member.last_name as last_name',
        ])
            ->join('photo', 'collect_list.photo_id', '=', 'photo.id')
            ->join('photo_series', 'photo.photo_series_id', '=', 'photo_series.id')
            ->join('member', 'photo.member_id', 'member.id')
            ->where('user_id', $userId)
            ->groupBy('photo_series.id', 'member.id')
            ->orderBy('photo_series.id')
            ->get();

        $photoSetList = [];
        foreach($results as $result) {
            $photoSetList[] = new PhotoSet(
                $result->collect_list_id,
                $result->photo_series_name,
                $result->photo_series_image_url,
                new FullName(
                    $result->first_name,
                    $result->last_name
                )
            );
        }

        return new CollectPhotoSetResultDto($photoSetList);
    }
}
