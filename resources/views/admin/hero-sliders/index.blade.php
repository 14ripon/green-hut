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
                    <h1>Basic Form</h1>
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
                        Slider Data
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover my-2">
                            <thead>
                            <tr>
{{--                                <th style="width: 70px;">Select</th>--}}
                                <th>Title</th>
                                <th style="width:150px;">Thumbnail</th>
                                <th style="width:150px;">Status </th>
                                <th style="width:150px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                            <tr>
{{--                                <td>--}}
{{--                                    <div class="checkbox checkbox-success p-0">--}}
{{--                                        <input id="checkbox1" type="checkbox">--}}
{{--                                        <label for="checkbox1"></label>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                                <td>{{ $slider->title }}</td>
                                <td>
                                    <img width="150" class="img-thumbnail" src="{{ asset('storage/'.$slider->image) }}" alt="">
                                </td>
                                <td>
                                    <button class="status-btn btn {{ $slider->is_active ? 'btn-success' : 'btn-secondary' }}"
                                            data-id="{{ $slider->id }}">
                                        {{ $slider->is_active ? 'Active' : 'Inactive' }}
                                    </button>
                                </td>
                                <td>
                                    <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('admin.hero-sliders.edit', $slider->id) }}" class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <form class="d-inline" action="{{ route('admin.hero-sliders.delete', $slider->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-1">Add New Item</button>

                            <div class="md-modal box-shadow md-effect-1" id="modal-1">
                                <button class="btn btn-danger md-close"><i class="hvr-buzz-out fa fa-close"></i></button>
                                <div class="md-content">
                                    <h3>Add Slider Image</h3>
                                    <div class="n-modal-body">
                                        <form class="py-2" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="exampleTextarea">Title</label>
                                                <input class="form-control" id="exampleTextarea" type="text" name="title" placeholder="Slider Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image</label>
                                                <input class="form-control" type="file" id="exampleInputFile" name="image" aria-describedby="fileHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="alt">Image Alt Text</label>
                                                <input class="form-control" type="text" id="alt" name="alt_text">
                                            </div>

                                            <div class="form-group pl-0 checkbox checkbox-primary">
                                                {{-- hidden input (unchecked হলে 0 যাবে) --}}
                                                <input type="hidden" name="is_active" value="0">

                                                {{-- checkbox (checked হলে 1 overwrite হবে) --}}
                                                <input id="checkbox2" type="checkbox" name="is_active" value="1">
                                                <label for="checkbox2">Publish</label>

                                            </div>

                                            <button type="submit" class="btn btn-base mb-3">Save</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            </tbody>
                        </table>
                    </div>
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
        document.querySelectorAll('.status-btn').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                const btn = this;

                fetch(`/admin/hero-sliders/${id}/toggle-status`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    }
                })
                    .then(res => res.json())
                    .then(data => {
                        btn.textContent = data.text;

                        if (data.status) {
                            btn.classList.remove('btn-secondary');
                            btn.classList.add('btn-success');
                        } else {
                            btn.classList.remove('btn-success');
                            btn.classList.add('btn-secondary');
                        }
                    });
            });
        });
    </script>
@endpush
