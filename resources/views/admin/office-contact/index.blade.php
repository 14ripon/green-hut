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
                    <div class="dropdown"></div>
                </div>
                <div class="card-block p-3 basic-forms">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover my-2">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Map URL</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->title }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td style="max-width:200px;">{{ $contact->map_url }}</td>
                                    <td>
                                        <button
                                            class="statusBtn btn {{ $contact->status ? 'btn-success' : 'btn-danger' }}"
                                            data-id="{{ $contact->id }}"
                                            data-status="{{ $contact->status ? 0 : 1 }}"
                                        >
                                            {{ $contact->status ? 'Active' : 'Inactive' }}
                                        </button>
                                    </td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('office-contact.edit',$contact->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <form class="d-inline" action="{{ route('office-contact.destroy', $contact->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                        {{--                                        <form action="{{ route('locations.destroy',$location->id) }}" method="POST">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            @method('DELETE')--}}
                                        {{--                                            <button>Delete</button>--}}
                                        {{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('office-contact.create') }}" class="btn btn-base md-trigger mb-2 mr-1">Add New Office</a>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')
    <script>
        $('.statusBtn').on('click', function () {

            let button = $(this);
            let id = button.data('id');
            let status = button.data('status');

            $.ajax({
                url: "{{ route('office-contact.status.update') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    status: status
                },
                success: function (response) {

                    if (status == 1) {
                        button
                            .removeClass('btn-danger')
                            .addClass('btn-success')
                            .text('Active')
                            .data('status', 0);
                    } else {
                        button
                            .removeClass('btn-success')
                            .addClass('btn-danger')
                            .text('Inactive')
                            .data('status', 1);
                    }
                }
            });
        });
    </script>


@endpush
