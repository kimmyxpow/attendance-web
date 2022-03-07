@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">User</li>
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
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary mb-2">Back</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            User
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>E-Mail</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Is Admin?</th>
                                    <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <th>Photo</th>
                                    <td><img width="350" src="{{ asset('/storage/profile/' . $user->photo) }}" alt=""></td>
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

