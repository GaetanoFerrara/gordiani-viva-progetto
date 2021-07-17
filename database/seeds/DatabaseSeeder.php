<?php

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
        $this->call([
            JumbotronSeeder::class,
            TerritorySeeder::class,
            ResourceSeeder::class,
            ResourceLinkSeeder::class,
            PathSeeder::class,
            PanelSeeder::class,
        ]);
    }
}
