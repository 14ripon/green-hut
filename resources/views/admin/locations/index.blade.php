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
                                <th>City</th>
                                <th>Area</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($locations as $location)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $location->city }}</td>
                                    <td>{{ $location->area }}</td>
                                    <td>{{ $location->state }}</td>
                                    <td>{{ $location->country }}</td>
                                    <td>
                                        {{ $location->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('locations.edit',$location->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>

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
                    <a href="{{ route('locations.create') }}" class="btn btn-base md-trigger mb-2 mr-1">Add New Location</a>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')


@endpush
