<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resource;
use App\ResourceLink;

class ResourceController extends Controller
{
    public function resources($id) {

        $resources = Resource::where('territory_id', $id)->get();

        foreach($resources as $resource) {
            $resource["links"] = ResourceLink::where('resource_id', $resource["id"])->get();
        }

        return response()->json($resources);
    }
}
