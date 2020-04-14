<?php

use App\Entities\User;
use App\Entities\Channel;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Channel::class, 20)->create();

        // заполняем рандомными каналами
        $channels = Channel::all();
        User::all()->each(function (User $user) use ($channels) {
            $user->channels()->attach(
                $channels->random(rand(1, count($channels)))->pluck('id')->toArray()
            );
        });
    }
}
