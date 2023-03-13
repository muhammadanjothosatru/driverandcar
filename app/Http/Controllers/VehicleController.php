<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicle = Vehicle::all();
        return view('vehicle.index', compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $driverlist = Driver::where('status', '!=', '1')->get();
        return view('vehicle.create', compact('driverlist'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Vehicle;
        //General Data
        $model->vehicle_name = $request->vehicle_name;
        $model->plate_number = $request->plate_number;
        $model->driver_id = $request->driver_id;
        $model->vehicle_type = $request->vehicle_type;
        $model->color = $request->color;
        $model->tax_date = $request->tax_date;

        $driver = Driver::findOrFail($request->driver_id);
        $driver->status = '1';
        
        $model->save();
        $driver->save();

        return redirect('vehicle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicle::findorfail($id);
        $driverlist = Driver::where('status', '!=', '1')->get();
        $drivernow = Driver::findOrFail($vehicle->driver_id);
        // dd($driverlist);
        return view('vehicle.edit', compact('vehicle', 'driverlist', 'drivernow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Vehicle::find($id);
        $model->vehicle_name = $request->vehicle_name;
        $model->plate_number = $request->plate_number;

       
        if ($model->driver_id != $request->driver_id) {
            $driverold = Driver::findOrFail($model->driver_id);
            $drivernew = Driver::findOrFail($request->driver_id);

            $model->driver_id = $request->driver_id;
            $driverold->status = '0';
            $drivernew->status = '1';
            $driverold->save();
            $drivernew->save();
        }
        
        $model->vehicle_type = $request->vehicle_type;
        $model->color = $request->color;
        $model->tax_date = $request->tax_date;

        $model->save();
        return redirect('vehicle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Vehicle::find($id);
        $data->delete();
        return redirect('vehicle');
    }
}
