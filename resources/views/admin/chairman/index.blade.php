@extends('admin.layouts.app')

@section('title', 'Chairman - Edit')

@section('content')


    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Chairman Message</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="#"><i class="pe-7s-home"></i> Home</a>/</li>
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
                        Scrolling Component Data
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">
                        <form method="POST" enctype="multipart/form-data"
                              action="{{ route('chairman.update', $chairmen->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input class="form-control" id="title" name="name" value="{{$chairmen->name}}">
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input class="form-control" id="designation" name="designation" value="{{$chairmen->designation}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <img class="mb-1 img-thumbnail" src="{{ asset('storage/'.$chairmen->photo) }}"
                                     style="max-width:300px;">
                                <input class="form-control" type="file" id="exampleInputFile" name="photo">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
{{--                                <textarea class="form-control" name="message" id="message">{{ $chairmen->message }}</textarea>--}}
                                <textarea name="message" id="editor1" rows="10" cols="80">
                            {{ $chairmen->message }}
                        </textarea> <!-- /.Ck Editor -->
                            </div>

                            <button type="submit" class="btn btn-base mb-3">Save</button>
                        </form>

                </div>
            </div>






        </div><!-- /content -->
    </div><!-- /content-wrapper -->
@endsection

@push('js')
    <!-- ckeditor Js -->
    <script src="{{ asset('admin/assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/ckeditor/ckeditor-active.js') }}"></script>
@endpush

