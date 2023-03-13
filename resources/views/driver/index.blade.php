@extends('master')

@section('konten')
    <h3 class="mt-3">Driver Data</h3>

    <div class="card p-2">
        <div class="col-sm-3 mb-2">
            <a href="{{ url('driver/create') }}" class="btn btn-primary mb-2" style="color: white;">Add Driver</a>
        </div>
        <table id="table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Driver Name</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>ID Number</th>
                    <th>Address</th>
                    <th>Driving License</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($driver as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->gender }}</td>
                        <td>{{ $d->birth_date }}</td>
                        <td>{{ $d->id_number }}</td>
                        <td>{{ $d->address }}</td>
                        <td>{{ $d->driving_license }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ url('driver/' . $d->driver_id . '/edit') }}"><i
                                    class="fas fa-edit"></i></a>
                            <form action="{{ url('driver/' . $d->driver_id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" onclick="return confirm('Are you sure want to delete?')"
                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
