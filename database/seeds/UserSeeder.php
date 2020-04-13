<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        /*
        factory(App\User::class, 5)->create()->each(function(User $u) {
            $u->channels()->save(factory(App\Channel::class)->make());
        });
        */
    }
}
