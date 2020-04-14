<?php


namespace App\Repositories;


use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class ChannelRepository
{
    public function getAllChannelsWithUser(int $user_id):Builder
    {
        // SELECT c.id, c.name, cu.user_id FROM channels c LEFT JOIN channel_user cu ON c.id = cu.channel_id WHERE cu.user_id = 1 OR cu.user_id is NULL;
        return DB::table('channels as c')
            ->select(DB::raw('c.id, c.name, cu.user_id'))
            ->leftJoin('channel_user as cu', 'c.id', '=', 'cu.channel_id')
            ->where('cu.user_id', '=', $user_id)
            ->orWhereNull('cu.user_id')
            ->orderBy('c.id');
    }
}