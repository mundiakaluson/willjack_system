<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
use App\Models\Landlord;

class Caretaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'landlord_id', 'first_name',
        'initials', 'phone_number'
    ];

    protected $table = 'caretaker';

    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
