@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Attendance List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Attendance</li>
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

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Attendance Chart -->
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mb-2">Add</a>

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
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th></th>
                                </tr>
                            </thead>
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

@push('scripts')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{{ url("attendance") }}',
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'user.name', name: 'user.name'},
                {data: 'status', name: 'status'},
                {data: function(row) {
                    let date = new Date(row.created_at);
                    return date.toLocaleString();
                }, name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush
