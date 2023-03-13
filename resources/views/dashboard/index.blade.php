@extends('master')

@section('konten')
    <h2 class="mt-3">Dashboard</h2>

    <div class="card p-2">
        <table id="table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Vehicle Number</th>
                    <th>Vehicle Brand Name</th>
                    <th>Driver Name</th>
                    <th>Tax Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->plate_number}}</td>
                    <td>{{$data->vehicle_name}}</td>
                    <td>{{$data->driver->name ?? 'Belum ada driver'}}</td>
                    @if ($diff = now()->diffInDays(Carbon\Carbon::parse($data->tax_date), false) >= 0)
                        <td><strong>{{$diff}} hari lagi</strong></td>
                    @elseif ($diff = now()->diffInDays(Carbon\Carbon::parse($data->tax_date), false) >= 0)
                        <td><strong>terlewat {{now()->diffInDays(Carbon\Carbon::parse($data->tax_date))}} hari</strong></td>
                    @else
                        <td><strong>Hari ini</strong></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
