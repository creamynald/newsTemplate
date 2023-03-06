@extends('admin.layout.app')

@section('heading', 'Posts')

@section('main_content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title p-1">Form</h3>
                            <a href="{{ route('admin_post_create') }}" class="btn btn-warning btn-sm float-right"><i
                                    class="fa fa-add" aria-hidden="true"></i> Add</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="overflow-x:auto;">
                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 50%">Post Title</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Author</th>
                                        <th>Admin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->post_title }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <center class="pt_10 pb_10">
                                                    <a href="{{ route('admin_post_edit', $row->id) }}"
                                                        class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>
                                                    <a href="{{ route('admin_post_delete', $row->id) }}"
                                                        class="btn btn-danger btn-sm" onclick="return confirm('r u sure?')"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></a>
                                                </center>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 50%">Post Title</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Author</th>
                                        <th>Admin</th>
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
