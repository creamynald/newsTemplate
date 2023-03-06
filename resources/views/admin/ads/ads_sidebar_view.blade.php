@extends('admin.layout.app')

@section('heading', 'Sidebar Advertisement')

@section('main_content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title p-1">Form</h3>
                            <a href="{{ route('admin_sidebar_ad_create') }}" class="btn btn-warning btn-sm float-right"><i
                                    class="fa fa-add" aria-hidden="true"></i> Add</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="overflow-x:auto;">
                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 50%">Photo</th>
                                        <th>Url</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sidebar_ad_data as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid" src="{{ asset('uploads/'.$row->sidebar_ad) }}"
                                                        alt="sidebar-ad-image" style="width: 50%">
                                                </div>
                                            </td>
                                            <td>{{ $row->sidebar_ad_url }}</td>
                                            <td>{{ $row->sidebar_ad_location }}</td>
                                            <td>
                                                <center class="pt_10 pb_10">
                                                    <a href="{{ route('admin_sidebar_ad_edit',$row->id) }}" class="btn btn-warning btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <a href="{{ route('admin_sidebar_ad_delete',$row->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></a>
                                                </center>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Photo</th>
                                        <th>Url</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
