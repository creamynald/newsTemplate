@extends('admin.layout.app')

@section('heading', 'Sidebar Advertisement - Update')

@section('main_content')
    <form class="form-horizontal" action="{{ route('admin_sidebar_ad_update',$sidebar_ad_data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- /.col -->
            <div class="col-md">
                <div class="card">
                    <div class="card-header p-2">
                        <h3 class="card-title p-1">Form</h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="active tab-pane" id="settings">
                                <div class="form-group">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid"
                                            src="{{ asset('uploads/' . $sidebar_ad_data->sidebar_ad) }}" alt="ads"
                                            style="width: 30%">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-2 col-form-label">Change Image</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="sidebar_ad" type="file" class="custom-file-input"
                                                    id="photo">
                                                <label class="custom-file-label" for="photo">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="url" class="col-sm-2 col-form-label">Url</label>
                                    <div class="col-sm-10">
                                        <input name="sidebar_ad_url" type="text" class="form-control text-muted" id="url"
                                            placeholder="url" value="{{ $sidebar_ad_data->sidebar_ad_url}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Location</label>
                                    <div class="col-sm">
                                        <select class="form-control" name="sidebar_ad_location">
                                            <option value="Top" @if ($sidebar_ad_data->sidebar_ad_location == 'Top') selected @endif>Top</option>
                                            <option value="Bottom" @if ($sidebar_ad_data->sidebar_ad_location == 'Bottom') selected @endif>Bottom</option>
                                        </select>
                                    </div>
                                </div>
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
        <div class="form-group row">
            <div class="col-sm-10 pull-right">
                <button type="submit" class="btn bg-orange">Update</button>
            </div>
        </div>
    </form>
@endsection
