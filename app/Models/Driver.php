<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $primaryKey = 'driver_id';
    protected $table = 'driver';
    protected $fillable = [
        'driver_id',
        'name',
        'gender',
        'birth_date',
        'id_number',
        'address',
        'driving_license',
    ];
    public function vehicle()
    {
    	return $this->belongsTo(Vehicle::class);
    }
}
