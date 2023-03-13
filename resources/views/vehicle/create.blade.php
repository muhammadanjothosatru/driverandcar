@extends('master')

@section('konten')
    <h3 class="mt-3">Input Vehicle Data</h3>
    <form action="{{ url('vehicle') }}" method="post">
        @csrf
        <div class="card p-3">
            <div class="mb-3 row">
                <label for="inputVehicleName" class="col-sm-2 col-form-label">Vehicle Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputVehicleName" name="vehicle_name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPlateNumber" class="col-sm-2 col-form-label">Plate Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPlateNumber" name="plate_number">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputDriver" class="col-sm-2 col-form-label">Driver</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="inputDriver" name="driver_id" required>
                        <option>Select Driver</option>
                        <option value="">Belum ada driver</option>
                        @foreach ($driverlist as $dl)
                            <option value="{{ $dl->driver_id }}">{{ $dl->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputVehicleType" class="col-sm-2 col-form-label">Vehicle Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputVehicleType" name="vehicle_type">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputColor" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputColor" name="color">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTaxDate" class="col-sm-2 col-form-label">Tax Date</label>
                <div class="col-sm-10">
                    <input id="inputTaxDate" class="form-control" type="date" name="tax_date" />
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
