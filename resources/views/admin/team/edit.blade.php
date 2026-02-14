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
                    <h1>Scroling Component</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="index.html"><i class="pe-7s-home"></i> Home</a>/</li>
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
                        Team Member Update Form
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">

                    <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Name *</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name', $team->name) }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title', $team->title) }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image (500X625)</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Image Alt Text</label>
                                <input class="form-control" type="text" name="alt_text" value="{{ old('alt_text', $team->alt_text) }}">
                            </div>
                        </div>

                        <div class="form-group checkbox checkbox-primary">
                            <select name="status">
                                <option value="1" {{ $team->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $team->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Facebook URL</label>
                                <input class="form-control" type="text" name="facebook" value="{{ old('facebook', $team->social->facebook ?? '') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>LinkedIn URL</label>
                                <input class="form-control" type="text" name="linkedin" value="{{ old('linkedin', $team->social->linkedin ?? '') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>WhatsApp</label>
                                <input class="form-control" type="text" name="whats_app" value="{{ old('whats_app', $team->social->whats_app ?? '') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{ old('phone', $team->social->phone ?? '') }}">
                            </div>
                        </div>



                        <button class="btn btn-base" type="submit">Update</button>
                    </form>





                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection
