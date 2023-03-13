@extends('master')

@section('konten')
    <h3 class="mt-3">Vehicle Data</h3>

    <div class="card p-2">
        <div class="col-sm-3 mb-2">
            <a href="{{ url('vehicle/create') }}" class="btn btn-primary mb-2" style="color: white;">Add Vehicle</a>
        </div>
        <table id="table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Vehicle Number</th>
                    <th>Vehicle Name</th>
                    <th>Driver Name</th>
                    <th>Tax Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicle as $v)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $v->plate_number }}</td>
                        <td>{{ $v->vehicle_name }}</td>
                        <td>{{ $v->driver->name ?? 'Belum ada driver'}}</td>
                        <td><strong>{{ $v->tax_date }}</strong></td>
                        <td>
                            <a class="btn btn-info" href="{{ url('vehicle/' . $v->id . '/edit') }}"><i
                                    class="fas fa-edit"></i></a>
                            <form action="{{ url('vehicle/' . $v->id) }}" method="POST">
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
