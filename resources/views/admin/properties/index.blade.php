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
                                <th>#</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Categories</th>
                                <th>Bedrooms</th>
                                <th>Bathrooms</th>
                                <th>Land Area</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($properties as $key => $property)
                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>{{ $property->title }}</td>

                                    <td>
                                        {{ $property->location?->city }}
                                        -
                                        {{ $property->location?->area }}
                                    </td>

                                    <td>
                                        @foreach ($property->categories as $cat)
                                            <span>{{ $cat->name }}</span>@if(!$loop->last),@endif
                                        @endforeach
                                    </td>

                                    <td>{{ $property->bedrooms ?? '-' }}</td>
                                    <td>{{ $property->bathrooms ?? '-' }}</td>

                                    <td>{{ $property->land_area ?? '-' }}</td>

                                    <td>
                                        {{ $property->status_text }}
                                    </td>

                                    <td>
                                        <a href="{{ route('properties.media.edit', $property->id) }}"
                                           class="btn btn-info">
                                            Manage Images
                                        </a>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('properties.edit', $property->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                        <form action="{{ route('properties.destroy', $property->id) }}"
                                              method="POST"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete" type="submit"
                                                    onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" align="center">No Property Found</td>
                                </tr>
                            @endforelse


                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('properties.create') }}" class="btn btn-base md-trigger mb-2 mr-1">Add New Property</a>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')


@endpush
