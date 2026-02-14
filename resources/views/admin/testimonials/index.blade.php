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
                    <h1>Basic Form</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href=""><i class="pe-7s-home"></i> Home</a>/</li>
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
                        Testimonial data
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover my-2">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Testimonial Subject</th>
                                <th>Testimonial Description</th>
                                <th style="width:150px;">Thumbnail</th>
                                <th style="width:110px;">Rating</th>
                                <th style="width:150px;">Status </th>
                                <th style="width:150px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->title }}</td>
                                    <td>{{ $testimonial->testimonial_subject }}</td>
                                    <td>{{ $testimonial->testimonial_description }}</td>
                                    <td>
                                        <img width="150" class="img-thumbnail" src="{{ asset('storage/'.$testimonial->thumbnail) }}" alt="">
                                    </td>
                                    <td>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa-star {{ $i <= $testimonial->rating ? 'fas text-warning' : 'far text-muted' }}"></i>
                                        @endfor
                                    </td>
                                    <td>
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <button class="status-btn"
                                                data-id="{{ $testimonial->id }}"
                                                data-status="{{ $testimonial->status }}"
                                                style="
                                                border:none;
                                                padding:5px 10px;
                                                cursor:pointer;
                                                color:white;
                                                background:{{ $testimonial->status ? 'green' : 'red' }};
                                            ">
                                            {{ $testimonial->status ? 'Active' : 'Inactive' }}
                                        </button>

                                    </td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure?')" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" data-original-title="Delete" title="" type="submit" >
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('testimonials.create') }}" class="btn btn-base md-trigger mb-2 mr-1">Add New Testimonial</a>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')

    <script>
        $('.status-btn').on('click', function () {

            let btn = $(this);
            let id  = btn.data('id');

            $.ajax({
                url: '/testimonials/' + id + '/status',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {

                    if (res.status == 1) {
                        btn.text('Active');
                        btn.css('background', 'green');
                        btn.data('status', 1);
                    } else {
                        btn.text('Inactive');
                        btn.css('background', 'red');
                        btn.data('status', 0);
                    }
                }
            });
        });
    </script>
@endpush
