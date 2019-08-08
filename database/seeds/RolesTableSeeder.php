<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        factory(App\Role::class)->create(['name' => 'user']);
        factory(App\Role::class)->create(['name' => 'administrator']);
        factory(App\Role::class)->create(['name' => 'client']);
    }
}
