<?php

use Illuminate\Database\Seeder;
use App\Resource;
use App\Territory;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $territories = Territory::all();
        $resources_conf = config('resources');

        $number = 0;

        foreach($resources_conf as $key => $resources) {

            $number += 1;

            foreach($resources as $item) {
                $resource = new Resource();
                $resource->territory_id = $number;
                $resource->fill($item);
                $resource->save();
            }

        }
    }
}
