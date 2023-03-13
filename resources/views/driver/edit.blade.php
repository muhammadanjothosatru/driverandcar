@extends('master')

@section('konten')
    <h3 class="mt-3">Input Driver Data</h3>

    <div class="card p-3">
        <form action="{{ url('driver/'.$data->driver_id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name" value="{{ $data->name }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male"
                            {{ $data->gender == 'Male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female"
                            {{ $data->gender == 'Female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputDateofBirth" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input id="startDate" class="form-control" type="date" name="birth_date" value="{{ $data->birth_date }}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputIDNumber" class="col-sm-2 col-form-label">ID Number</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputIDNumber" name="id_number" value="{{ $data->id_number }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputAddress" rows="3" name="address">{{ $data->address }}</textarea>
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="inputDrivingLicense" class="col-sm-2 col-form-label">Driving License</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="license" id="inlineRadio1" value="SIM A"
                        {{ $data->driving_license == 'SIM A' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio1">SIM A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="license" id="inlineRadio2" value="SIM B1"
                        {{ $data->driving_license == 'SIM B1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">SIM B1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="license" id="inlineRadio3" value="SIM B2"
                        {{ $data->driving_license == 'SIM B2' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio3">SIM B2</label>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button class="btn btn-md btn-primary px-5 rounded-pill" type="submit">Save Data</button>
            </div>

        </form>
    </div>
@endsection
