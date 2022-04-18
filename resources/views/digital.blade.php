@extends('dashboard.master1')
@section('title', 'rooms')
@section('big_title', 'Rooms Page')
@section('main_page', 'Rooms')
@section('sub_page', 'index')
@section('content')
    <div class="card-header">
        <h3 class="card-title">All Rooms</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered text-nowrap">
            <thead>
                <tr>
                    <th>الغرف</th>
                    <th>8-9</th>
                    <th>9-8</th>
                    <th>10-11</th>
                    <th>11-12</th>
                    <th>12-1</th>
                    <th>1-2</th>
                </tr>
            </thead>
            <tbody>
                {{ date('l') }}
                @foreach ($collages as $collage)
                    @if (date('l') == $collage->day->day && $floor->raspberry_pi_ip_address == $collage->room->floor->raspberry_pi_ip_address && $building->name == $collage->room->floor->building->name)
                        <tr>
                            <td>{{ $collage->room->name }}</td>
                            {{-- <td>{{ $collage->room->floor->raspberry_pi_ip_address }}</td> --}}
                            <td>{{ $collage->period_8 }}</td>
                            <td>{{ $collage->period_9 }}</td>
                            <td>{{ $collage->period_10 }}</td>
                            <td>{{ $collage->period_11 }}</td>
                            <td>{{ $collage->period_12 }}</td>
                            <td>{{ $collage->period_1 }}</td>
                            <td>{{ $collage->period_2 }}</td>
                            <td>{{ $collage->room->floor->building->name }}
                            <td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
@endsection
@section('scripts')
    <script>
    </script>
@endsection
