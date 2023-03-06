@extends('admin.layout.app')

@section('heading', 'Categoties - Edit')

@section('main_content')
    <form class="form-horizontal" action="{{ route('admin_category_update',$category_single->id) }}" method="POST" enctype="multipart/form-data">
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

                            <div class="active tab-pane" id="settings">
                                <div class="form-group row">
                                    <label for="category_name" class="col-sm-2 col-form-label">Category Name *</label>
                                    <div class="col-sm-10">
                                        <input name="category_name" type="text" class="form-control" id="category_name"
                                            placeholder="Category Name" value="{{ $category_single->category_name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="show_on_menu" class="col-sm-2 col-form-label">Show on menu?</label>
                                    <div class="col-sm">
                                        <select class="form-control" name="show_on_menu">
                                            <option value="Show" @if ($category_single->show_on_menu == 'Show') selected @endif>Yes! of
                                                course.
                                            </option>
                                            <option value="Hide" @if ($category_single->show_on_menu == 'Hide') selected  @endif>Nope</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category_order" class="col-sm-2 col-form-label">Category Order *</label>
                                    <div class="col-sm-10">
                                        <input name="category_order" type="text" class="form-control" id="category_order"
                                            placeholder="Category Order" value="{{ $category_single->category_order }}">
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
