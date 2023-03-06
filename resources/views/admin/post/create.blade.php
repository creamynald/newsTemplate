@extends('admin.layout.app')

@section('heading', 'Post - Create')

@section('main_content')
    <form class="form-horizontal" action="{{ route('admin_post_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                            <textarea id="summernote">
                            Place <em>some</em> <u>text</u> <strong>here</strong>
                          </textarea>
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
                <button type="submit" class="btn bg-orange">Submit</button>
            </div>
        </div>
    </form>
@endsection
