@extends('admin.layouts.app')

@section('title', 'Home - Admin')



@section('content')

    @if(session('success'))
        <div style="background:#d1fae5;color:#065f46;padding:10px;margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="background:#fee2e2;color:#991b1b;padding:10px;margin-bottom:10px;">
            {{ session('error') }}
        </div>
    @endif
    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Basic Form</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="{{ route('slider-index') }}"><i class="pe-7s-home"></i> Home</a>/</li>
                        <li><a class="px-2" href="#">Forms</a>/</li>
                        <li class="active px-2">Basic Form</li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- this page conntent-->
            <div class="card lobicard lobicard-sortable" data-sortable="true" data-inner-id="x5dGz22KYW" data-index="4" style="display: block;">
                <div class="card-header ui-sortable-handle">
                    <div class="card-title" style="max-width: calc(100% - 210px);">
                        Slider Data
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">




                    <form action="{{ route('admin.hero-sliders.update', $slider->id) }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- fields -->
                        <div class="form-group">
                            <label for="exampleTextarea">Title</label>
                            <input class="form-control" id="exampleTextarea" type="text" name="title" value="{{ $slider->title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input class="form-control" type="file" id="exampleInputFile" name="image" aria-describedby="fileHelp">
                        </div>

                        <div class="form-group">
                            <label for="alt">Image Alt Text</label>
                            <input class="form-control" id="alt" type="text" name="alt_text" value="{{ $slider->alt_text }}">
                        </div>


                        <button type="submit" class="btn btn-base mb-3">Update</button>
                    </form>

                    </div>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->
@endsection


