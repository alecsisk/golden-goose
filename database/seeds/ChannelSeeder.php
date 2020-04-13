<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Channel::class, 20)->create();

        // заполняем рандомными каналами
        $channels = App\Channel::all();
        App\User::all()->each(function (User $user) use ($channels) {
            $user->channels()->attach(
                $channels->random(rand(1, count($channels)))->pluck('id')->toArray()
            );
        });
    }
}
