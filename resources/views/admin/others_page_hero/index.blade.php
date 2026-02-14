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
                    <h1>Other page hero section</h1>
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
                        Slider Data
                    </div>
                    <div class="dropdown">
                    </div>
                </div>
                <div class="card-block p-3 basic-forms">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover my-2">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Page Name</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th style="width:150px;">Thumbnail</th>
                                <th style="width:150px;">Status </th>
                                <th style="width:150px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($heroes as $hero)
                                <tr>
                                    <td>{{ $hero->id }}</td>
                                    <td>{{ $hero->page_name }}</td>
                                    <td>{{ $hero->title }}</td>
                                    <td>{{ $hero->sub_title }}</td>
                                    <td>
                                        <img width="150" class="img-thumbnail" src="{{ asset('storage/'.$hero->image) }}" alt="">
                                    </td>
                                    <td>
                                        <meta name="csrf-token" content="{{ csrf_token() }}">

                                        <button
                                            class="btn btn-sm status-btn {{ $hero->status ? 'btn-success' : 'btn-danger' }}"
                                            data-id="{{ $hero->id }}"
                                        >
                                            {{ $hero->status ? 'Active' : 'Inactive' }}
                                        </button>
                                    </td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('others-page-hero.edit', $hero->id) }}" class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>
{{--                                        <form class="d-inline" action="{{ route('others-page-hero.destroy', $hero->id) }}"--}}
{{--                                              method="POST"--}}
{{--                                              onsubmit="return confirm('Are you sure?')">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>--}}
{{--                                        </form>--}}

                                    </td>
                                </tr>
                            @endforeach
                            <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-1">Add New Item</button>

                            <div class="md-modal box-shadow md-effect-1" id="modal-1">
                                <button class="btn btn-danger md-close"><i class="hvr-buzz-out fa fa-close"></i></button>
                                <div class="md-content">
                                    <h3>Add Another New Page Hero</h3>
                                    <div class="n-modal-body">
                                        <form class="py-2" method="POST" action="{{ route('others-page-hero.store') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="exampleTextarea">Title</label>
                                                <input class="form-control" id="exampleTextarea" type="text" name="title" placeholder="Slider Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="sub_title">Sub Title</label>
                                                <input class="form-control" id="sub_title" type="text" name="sub_title" placeholder="Slider Title">
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
                                                <input type="hidden" name="status" value="0">

                                                {{-- checkbox (checked হলে 1 overwrite হবে) --}}
                                                <input id="checkbox2" type="checkbox" name="status" value="1">
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
