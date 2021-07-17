<?php

use Illuminate\Database\Seeder;
use App\Jumbotron;
use Illuminate\Support\Str;

class JumbotronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jumbotron_data = config('jumbotron');

        foreach($jumbotron_data as $item) {
            $jumbotron = new Jumbotron();
            $jumbotron->fill($item);
            $jumbotron->save();
        }


    }
}
