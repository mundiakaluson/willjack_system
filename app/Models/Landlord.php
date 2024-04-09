<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Landlord extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id', 'first_name',
        'last_name', 'initials'
    ];
    protected $table = 'landlord';

    public function property(): HasMany
    {
        return $this->hasMany(Property::class);
    }

}
