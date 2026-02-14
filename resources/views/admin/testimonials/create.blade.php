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
                    <h1>Testimonial Form</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="{{ route('testimonials.index') }}"><i class="pe-7s-home"></i> Home</a>/</li>
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
                    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" type="text" name="title" placeholder="Title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="testimonial_subject">Testimonial Subject</label>
                                <input class="form-control" id="testimonial_subject" type="text" name="testimonial_subject" placeholder="Testimonial Subject">
                            </div>
                            <div class="form-grou col-md-6">
                                <label for="rating">Rating</label>
                                <input class="form-control" type="range" name="rating" class="form-range" min="0" max="5" id="rating">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="testimonial_subject">Thumbnail (550X400)</label>
                                <input class="form-control" type="file" name="thumbnail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="video_url">Video URL (YouTube Embed URL only)</label>
                                <input id="video_url" class="form-control" type="url" name="video_url">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="testimonial_description">Testimonial Description</label>
                            <textarea class="form-control" id="testimonial_description" name="testimonial_description"></textarea>
                        </div>
                        <div class="form-group pl-0 checkbox checkbox-primary">
                            {{-- hidden input (unchecked হলে 0 যাবে) --}}
                            <input type="hidden" name="status" value="0">
                            {{-- checkbox (checked হলে 1 overwrite হবে) --}}
                            <input id="checkbox2" type="checkbox" name="status" value="1">
                            <label for="checkbox2">Publish</label>
                        </div>
                        <button class="btn btn-base" type="submit">Save</button>
                    </form>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->
@endsection
