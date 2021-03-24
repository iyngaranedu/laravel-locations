<?php


namespace Iyngaran\Location\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Iyngaran\Location\Http\Resources\LocationResource;
use Iyngaran\Location\Models\Location;

class LocationController extends Controller
{
    public function index(Location $location): AnonymousResourceCollection
    {
        return LocationResource::collection($location->where('parent_id', null)->get());
    }

    public function show(Location $location): JsonResponse
    {
        return response()->json(new LocationResource($location));
    }

    public function showBySlug(Location $location): JsonResponse
    {
        return response()->json(new LocationResource($location));
    }
}
