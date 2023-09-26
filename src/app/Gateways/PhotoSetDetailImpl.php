<?php
declare(strict_types=1);

namespace App\Gateways;

use App\Application\Repositories\PhotoSetDetailInterface;
use App\Application\Repositories\PhotoSetDetailResultDto;
use App\Domain\FullName;
use App\Domain\PhotoContent;
use App\Domain\PhotoSetDetail;
use App\Models\CollectList;
use App\Models\Photo as PhotoModel;
use Illuminate\Support\Facades\DB;

class PhotoSetDetailImpl implements PhotoSetDetailInterface
{
    public function get(int $collectListId): PhotoSetDetailResultDto
    {
        $subQuery = CollectList::select(
            'photo_series_id',
            'member_id'
        )
            ->join('photo', 'collect_list.photo_id', '=', 'photo.id')
            ->where('collect_list.id', $collectListId)
            ->limit(1);

        $results = PhotoModel::select([
            'photo.id as photo_id',
            DB::raw('CASE WHEN collect_list.photo_id IS NULL THEN 0 ELSE 1 END as has_photo'),
            'photo.image_url',
            'photo.pose',
            'member.first_name',
            'member.last_name'
        ])
            ->joinSub($subQuery, 'sub_query', function($join) {
                $join->on('photo.photo_series_id', '=', 'sub_query.photo_series_id')
                    ->on('photo.member_id', '=', 'sub_query.member_id');
            })
            ->join('member', 'sub_query.member_id', '=', 'member.id')
            ->leftJoin('collect_list', 'photo.id', '=', 'collect_list.photo_id')
            ->get();

        $photoContent = [];
        foreach($results as $result) {
            $photoContent[] = new PhotoContent(
                $result->photo_id,
                $result->has_photo,
                $result->image_url,
                $result->pose,
                new FullName(
                    $result->first_name,
                    $result->last_name
                )
            );
        }
        
        $photoSetDetail = new PhotoSetDetail(
            new FullName($results[0]->first_name, $results[0]->last_name),
            $photoContent
        );

        return new PhotoSetDetailResultDto($photoSetDetail);
    }
}
