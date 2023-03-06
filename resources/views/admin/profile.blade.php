@extends('admin.layout.app')

@section('heading', 'Edit Profile')

@section('main_content')
    <div class="row">
        <!-- /.col -->
        <div class="col-md">
            <div class="card">
                <div class="card-header p-2">
                    <h3 class="card-title p-1">Form</h3>
                    <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm float-right"><i class="fa fa-undo"
                            aria-hidden="true"></i> back</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">

                        <div class="active tab-pane" id="settings">
                            <form class="form-horizontal" action="{{ route('admin_profile_submit') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                                <div class="form-group">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('uploads/'.Auth::guard('admin')->user()->photo) }}"
                                            alt="admin profile picture">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{ Auth::guard('admin')->user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::guard('admin')->user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="photo" type="file" class="custom-file-input" id="photo">
                                                <label class="custom-file-label" for="photo">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="retype_password" class="col-sm-2 col-form-label">Retype Password</label>
                                    <div class="col-sm-10">
                                        <input name="retype_password" type="password" class="form-control" id="retype_password"
                                            placeholder="Retype Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn bg-orange">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
