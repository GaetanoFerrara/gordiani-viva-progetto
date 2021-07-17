<?php


use Illuminate\Database\Seeder;
use App\Resource;
use App\ResourceLink;

class ResourceLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resourcesLinks_conf = config('resourceLinks');

        $number = 0;

        foreach($resourcesLinks_conf as $key => $resourceLinks) {

            $number += 1;

            foreach($resourceLinks as $item) {
                $resourceLink = new ResourceLink();
                $resourceLink->resource_id = $number;
                $resourceLink->fill($item);
                $resourceLink->save();
            }

        }
    }
}
