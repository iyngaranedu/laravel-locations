<?php


namespace Iyngaran\Location\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Iyngaran\Location\Http\Resources\LocationResource;
use Iyngaran\Location\Models\Location;

class SubLocationController extends Controller
{
    public function __invoke(Location $location): JsonResponse
    {
        return response()->json(LocationResource::collection($location->subLocations));
    }
}
