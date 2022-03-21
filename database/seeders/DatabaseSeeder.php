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
        \App\Models\Paket::factory(100)->create();
        \App\Models\Barang::factory(3)->create();
        \App\Models\Penjemputan::factory(20)->create();
        $this->call(UserSeeder::class);
    }
}
