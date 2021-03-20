<?php


namespace Iyngaran\Location\Http\Controllers;


use Illuminate\Routing\Controller;
use Iyngaran\Location\Http\Resources\LocationResource;
use Iyngaran\Location\Models\Location;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SubLocationController extends Controller
{
    public function __invoke(Location $location): AnonymousResourceCollection
    {
        return LocationResource::collection($location->subLocations);
    }
}
