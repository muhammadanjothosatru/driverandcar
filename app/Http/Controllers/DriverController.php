<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $driver = Driver::latest()->get();
        return view('driver.index', compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Driver;
        $model->name = $request->name;
        $model->gender = $request->gender;
        $model->birth_date = $request->birth_date;
        $model->id_number = $request->id_number;
        $model->address = $request->address;
        $model->driving_license = $request->license;
        $model->status = '0';
        $model->save();

        return redirect('driver');
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
        $data = Driver::find($id);
        return view('driver.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Driver::findorfail($id);
        $model->name = $request->name;
        $model->gender = $request->gender;
        $model->birth_date = $request->birth_date;
        $model->id_number = $request->id_number;
        $model->address = $request->address;
        $model->driving_license = $request->license;
        $model->save();

        return redirect('driver');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Driver::find($id);
        $data->delete();
        return redirect('driver');
    }
}
