@extends('master')

@section('konten')
    <h3 class="mt-3">Input Driver Data</h3>

    <div class="card p-3">
        <form action="{{ url('driver') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                            value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                            value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputDateofBirth" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input id="startDate" class="form-control" type="date" name="birth_date"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputIDNumber" class="col-sm-2 col-form-label">ID Number</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputIDNumber" name="id_number">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputAddress" rows="3" name="address"></textarea>
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="inputDrivingLicense" class="col-sm-2 col-form-label">Driving License</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="license" id="inlineRadio1"
                            value="SIM A">
                        <label class="form-check-label" for="inlineRadio1">SIM A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="license" id="inlineRadio2"
                            value="SIM B1">
                        <label class="form-check-label" for="inlineRadio2">SIM B1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="license" id="inlineRadio3"
                            value="SIM B2">
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
