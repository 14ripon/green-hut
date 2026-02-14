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
                                <th>Media Type</th>
                                <th>Media</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->media_type }}</td>
                                    <td>
                                        @if($slider->media_type === 'image')
                                            <img style="width:200px;" src="{{ asset('storage/'.$slider->media_path) }}">
                                        @elseif($slider->media_type === 'video')
                                            <video style="width:200px;" controls>
                                                <source src="{{ asset('storage/'.$slider->media_path) }}" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $slider->status == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('explore-sliders.edit', $slider->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                        <form class="d-inline" method="POST"
                                              action="{{ route('explore-sliders.destroy', $slider->id) }}">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('explore-sliders.create') }}" class="btn btn-base md-trigger mb-2 mr-1">Add New Slide</a>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')


@endpush
