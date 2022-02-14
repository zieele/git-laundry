<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Outlet::factory(5)->create();
        \App\Models\Member::factory(50)->create();
        \App\Models\Paket::factory(3)->create();
        // \App\Models\User::factory()->create();
        $this->call(TUserSeeder::class);
    }
}
