@extends('admin.layouts.app')

@section('title', 'Projects - Feature & Amenity')
@push('css')
    
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
                    <h1>Features & Amenities</h1>
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
                                <th>Feature & Amenity</th>
                                <th>icon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td style="width:200px;">
                                        <img class="img-thumbnail" src="{{ asset('storage/'.$item->icon) }}" alt="">
                                    </td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('features-amenities.edit',$item->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <button  data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "
                                            class="btn btn-danger deleteBtn"
                                            data-id="{{ $item->id }}">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>

                                        <form id="delete-form-{{ $item->id }}" 
                                            action="{{ route('features-amenities.destroy', $item->id) }}" 
                                            method="POST" 
                                            style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="md-modal md-effect-1" id="modal-1">
                        <div class="md-content">
                            <h3>Add New Feature & Amenity</h3>
                            <div class="n-modal-body">
                                <form action="{{ route('features-amenities.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Feature & Amenity Name</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input class="form-control" type="file" name="icon">
                                    </div>
                                    <div class="form-group col-md-6 pl-0 checkbox checkbox-primary">
                                        <input type="hidden" name="status" value="0" >
                                        <input id="checkbox2" type="checkbox" name="status" value="1" >
                                        <label for="checkbox2">Publish</label>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-base" type="submit">Save</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="md-overlay"></div>
                    <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-1">Add New Feature & Amenity</button>
                    
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')
    
    
@endpush
