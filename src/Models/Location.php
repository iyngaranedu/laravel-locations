<?php


namespace Iyngaran\Location\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $guarded = [];
    protected $table = 'locations';

    public function subLocations(): HasMany
    {
        return $this->hasMany(Location::class, 'parent_id')
            ->orderBy('name');
    }
}
