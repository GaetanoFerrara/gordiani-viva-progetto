<?php

use Illuminate\Database\Seeder;
use App\Path;
use App\Panel;

class PanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paths = Path::all();
        $panels_data = config('panels');

        $number = 0;

        foreach($panels_data as $panels) {

            $number += 1;

            foreach($panels as $item) {
                $panel = new Panel;
                $panel->path_id = $number;
                $panel->fill($item);
                $panel->save();
            }
        }


    }
}
