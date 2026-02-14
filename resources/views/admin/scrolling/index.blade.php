@extends('admin.layouts.app')

@section('title', 'Home - Admin')

@push('css')
    <link href="{{ asset('admin/assets/plugins/modals/modal-component.css')}}" rel="stylesheet" type="text/css"/>
@endpush


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
                        Scrolling Component Data
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">
                    @if($hasData)
                        <form method="POST" enctype="multipart/form-data"
                              action="{{ route('scrolling.update', $scrolling->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <img class="mb-1" src="{{ asset('storage/'.$scrolling->image) }}"
                                     style="max-width:300px;">
                                <input class="form-control" type="file" id="exampleInputFile" name="image">
                            </div>
                            <div class="form-group">
                                <label for="alt">Image Alt Text</label>
                                <input class="form-control" type="text" id="alt" name="alt_text" value="{{ $scrolling->alt_text }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="description">{{ $scrolling->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="video">Video link (Youtube Ifram URL Only)</label>
                                <input class="form-control" type="text" id="video" value="{{ $scrolling->video }}" name="video" placeholder="https://www.youtube.com/embed/ZK-rNEhJIDs?autoplay=1&mute=1&loop=1&playlist=ZK-rNEhJIDs&controls=0">
                            </div>

                            <button type="submit" class="btn btn-base mb-3">Update</button>
                        </form>

                    @endif





                        @if(!$hasData)
                            <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-1">Add New Item</button>

                            <div class="md-modal box-shadow md-effect-1" id="modal-1">
                                <button class="btn btn-danger md-close"><i class="hvr-buzz-out fa fa-close"></i></button>
                                <div class="md-content">
                                    <h3>Add Scrooling Section (1)</h3>
                                    <div class="n-modal-body">

                                        <form method="POST" enctype="multipart/form-data"
                                              action="{{ route('scrolling.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image</label>
                                                <input class="form-control" type="file" id="exampleInputFile" name="image">
                                            </div>
                                            <div class="form-group">
                                                <label for="alt">Image Alt Text</label>
                                                <input class="form-control" type="text" id="alt" name="alt_text">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="video">Video</label>
                                                <input class="form-control" type="file" id="video" name="video">
                                            </div>

                                            <button type="submit" class="btn btn-base mb-3">Create</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endif



                </div>
            </div>






        </div><!-- /content -->
    </div><!-- /content-wrapper -->
@endsection


@push('js')
    <script src="{{ asset('admin/assets/plugins/modals/classie.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/modals/modalEffects.js') }}"></script>

    {{--    toggle button--}}
    <script>
        $(document).on('click', '.status-btn', function () {

            let btn = $(this);
            let heroId = btn.data('id');

            btn.prop('disabled', true);

            $.ajax({
                url: `/admin/others-page-hero/${heroId}/toggle-status`,
                type: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    if (res.success) {
                        if (res.status) {
                            btn
                                .removeClass('btn-danger')
                                .addClass('btn-success')
                                .text('Active');
                        } else {
                            btn
                                .removeClass('btn-success')
                                .addClass('btn-danger')
                                .text('Inactive');
                        }
                    }
                },
                error: function () {
                    alert('Something went wrong');
                },
                complete: function () {
                    btn.prop('disabled', false);
                }
            });
        });
    </script>
@endpush
