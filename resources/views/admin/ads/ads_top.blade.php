@extends('admin.layout.app')

@section('heading', 'Top Advertisement')

@section('main_content')
    <form class="form-horizontal" action="{{ route('admin_upper_ad_update') }}" method="POST" enctype="multipart/form-data">
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
                                            src="{{ asset('uploads/' . $upper_ad_data->upper_ad) }}" alt="ads"
                                            style="width: 100%">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="upper_ad" type="file" class="custom-file-input"
                                                    id="photo">
                                                <label class="custom-file-label" for="photo">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="url" class="col-sm-2 col-form-label">Url</label>
                                    <div class="col-sm-10">
                                        <input name="upper_ad_url" type="text" class="form-control" id="url"
                                            placeholder="url" value="{{ $upper_ad_data->upper_ad_url }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm">
                                        <select class="form-control" name="upper_ad_status">
                                            <option value="Show" @if ($upper_ad_data->upper_ad_status == 'Show') selected @endif>Active
                                            </option>
                                            <option value="Hide" @if ($upper_ad_data->upper_ad_status == 'Hide') selected @endif>
                                                Inactive</option>
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
