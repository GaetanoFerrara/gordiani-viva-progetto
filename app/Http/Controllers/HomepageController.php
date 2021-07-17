<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jumbotron;
use App\Territory;
use App\Resource;
use App\Path;
use App\Panel;

class HomepageController extends Controller
{
    public function index()
    {
        $jumbotrons = Jumbotron::all();
        $territories = Territory::all();
        $paths = Path::all();

        return view('homepage', compact('jumbotrons', 'territories', 'paths'));
    }

    public function path($slug) {
        $path = Path::where('slug', $slug)->first();

        $panels = $path->panels;

        return view('path.path_detail', compact('path', 'panels'));
    }
}
