@extends('admin.layouts.app')

@section('title', 'Home - Admin')

@section('content')


    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Meeting Section</h1>
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
                    @if($hasData)
                        <form method="POST" enctype="multipart/form-data"
                              action="{{ route('meeting-sections.update', $meeting_content->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Section Title</label>
                                <input class="form-control" id="title" name="title" value="{{$meeting_content->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <img class="mb-1 img-thumbnail" src="{{ asset('storage/'.$meeting_content->image) }}"
                                     style="max-width:300px;">
                                <input class="form-control" type="file" id="exampleInputFile" name="image">
                            </div>
                            <div class="form-group">
                                <label for="bg_image">Background Image</label>
                                <img class="mb-1 img-thumbnail" src="{{ asset('storage/'.$meeting_content->bg_image) }}"
                                     style="max-width:300px;">
                                <input class="form-control" type="file" id="bg_image" name="bg_image">
                            </div>
                            <div class="form-group">
                                <label for="map_embed">Map Embed (Embed src Only)</label>
                                <input class="form-control" id="map_embed" placeholder="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d58418.587908800175!2d90.398497!3d23.777254!3m2!1i1024!2i768!4f13.1!2m1!1sgreen%20hut%20real%20estate%20company!5e0!3m2!1sen!2sbd!4v1760895909451!5m2!1sen!2sbd" name="map_embed" value="{{$meeting_content->map_embed}}">
                            </div>

                            <button type="submit" class="btn btn-base mb-3">Update</button>
                        </form>

                    @endif

                    @if(!$hasData)

                        <form method="POST" enctype="multipart/form-data"
                              action="{{ route('meeting-sections.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Section Title</label>
                                <input class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input class="form-control" type="file" id="exampleInputFile" name="image">
                            </div>
                            <div class="form-group">
                                <label for="bg_image">Background Image</label>
                                <input class="form-control" type="file" id="bg_image" name="bg_image">
                            </div>

                            <button type="submit" class="btn btn-base mb-3">Save</button>
                        </form>

                    @endif



                </div>
            </div>






        </div><!-- /content -->
    </div><!-- /content-wrapper -->
@endsection

