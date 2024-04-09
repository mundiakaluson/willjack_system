<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Landlord;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'landlord_id', 'alias',
        'category', 'town', 'area',
        'address', 'units', 'units_vacant',
        'monthly_rent', 'cummulative_monthly_rent',
        'filename',
    ];
    protected $table = 'property';

    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }
}
