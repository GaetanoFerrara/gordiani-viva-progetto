<?php

use Illuminate\Database\Seeder;
use App\Territory;

class TerritorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $territories = config('territories');

        foreach($territories as $item) {
            $territory = new Territory();

            $territory->fill($item);
            $territory->save();
        }
    }
}
