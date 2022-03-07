@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Attendance</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Attendance</li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
                <!-- Attendance Chart -->
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary mb-2">Back</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Attendance
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <tbody>
                                <tr>
                                    <th>Time</th>
                                    <td>{{ $attendance->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $attendance->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Lat, Long</th>
                                    <td>{{ $attendance->lat }}, {{ $attendance->long }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $attendance->address }}</td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>
                                        <div style="width: 100%">
                                            <iframe
                                                width="100%"
                                                height="300"
                                                frameborder="0"
                                                scrolling="no"
                                                marginheight="0"
                                                marginwidth="0"
                                                src="https://maps.google.com/maps?q={{ $attendance->lat }},{{ $attendance->long }}&hl=en&z=14&amp;output=embed"
                                            >
                                            </iframe>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Photo</th>
                                    <td><img width="350" src="{{ asset('/storage/photo/' . $attendance->photo) }}" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection

