<?php

namespace App\Models;

use App\Models\Driver;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'vehicle';
    protected $fillable = [
        'id',
        'vehicle_name',
        'plate_number',
        'driver_id',
        'vehicle_type',
        'tax_date',
        'no_rangka',
        'color',
    ];
    public function driver()
    {
    	return $this->hasOne(Driver::class, 'driver_id', 'driver_id');
    }
}
