<?php

use Illuminate\Database\Seeder;
use App\Path;
use Illuminate\Support\Str;

class PathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paths = config('paths');

        foreach($paths as $item) {
            $path = new Path();
            $path->slug = Str::slug($item['name']);
            $path->fill($item);
            $path->save();
        }
    }
}
