<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: stanko
 * Date: 05/08/19
 * Time: 23:39
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        factory(App\User::class)->create(['email' => 'admin@test.com', 'role_id' => 2]);
        factory(App\User::class)->create(['email' => 'stanko@test.com']);
    }
}