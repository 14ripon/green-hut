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
                    <h1>Testimonial Form</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="{{ route('properties.index') }}"><i class="pe-7s-home"></i> Home</a>/</li>
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
                    <form action="{{ route('properties.update', $property->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="row">
                            {{-- PROPERTY TITLE --}}
                            <div class="form-group col-md-4">
                                <label>Property Title</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title', $property->title) }}" required>
                            </div>
                            {{-- LOCATION --}}
                            <div class="form-group col-md-4">
                                <label>Location</label>
                                <select class="form-control" name="location_id" required>
                                    <option value="">Select Location</option>
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}"
                                            {{ $property->location_id == $location->id ? 'selected' : '' }}>
                                            {{ $location->city }} - {{ $location->area }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- LAND AREA --}}
                            <div class="form-group col-md-4">
                                <label>Land Area (sqft)</label>
                                <input class="form-control" type="number" name="land_area" value="{{ old('land_area', $property->land_area) }}">
                            </div>
                            {{-- FLOORS --}}
                            <div class="form-group col-md-4">
                                <label>No of Floors</label>
                                <input class="form-control" type="number" name="no_of_floors" value="{{ old('no_of_floors', $property->no_of_floors) }}">
                            </div>
                            {{-- APARTMENT PER FLOOR --}}
                            <div class="form-group col-md-4">
                                <label>Apartment Per Floor</label>
                                <input class="form-control" type="number" name="apartment_per_floor" value="{{ old('apartment_per_floor', $property->apartment_per_floor) }}">
                            </div>

                            {{-- APARTMENT SIZE --}}
                            <div class="form-group col-md-4">
                                <label>Apartment Size</label>
                                <input class="form-control" type="text" name="apartment_size" placeholder="1200 sqft" value="{{ old('apartment_size', $property->apartment_size) }}">
                            </div>
                            {{-- BEDROOMS --}}
                            <div class="form-group col-md-4">
                                <label>Bedrooms</label>
                                <input class="form-control" type="number" name="bedrooms" value="{{ $property->bedrooms }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Bathroom</label>
                                <input class="form-control" type="number" name="bathrooms" value="{{ $property->bathrooms }}">
                            </div>
                            {{-- LAUNCH DATE NOTE --}}
                            <div class="form-group col-md-4">
                                <label>Launch Date Note</label>
                                <input class="form-control" type="text" name="launch_date_note" placeholder="Launching Soon" value="{{ old('launch_date_note', $property->launch_date_note) }}">
                            </div>
                            {{-- COLLECTION --}}
                            <div class="form-group col-md-4">
                                <label>Collection</label>
                                <input class="form-control" type="text" name="collection" placeholder="" value="{{ old('collection', $property->collection) }}">
                            </div>

                            {{-- PROPERTY IMAGES --}}
                            <div class="form-group col-md-4">
                                <label>Existing Images</label>
                                @foreach ($property->media as $media)
                                    <img src="{{ asset('storage/'.$media->image) }}"
                                         width="80">
                                @endforeach
                                <label>Add More Images</label>
                                <input class="form-control mt-2" type="file" name="images[]" multiple>
                            </div>

                            {{-- CATEGORIES --}}
                            <div class="form-group col-md-4">
                                <label for="">Select Category</label>
                                @foreach ($categories as $category)
                                    <div class=" pl-0 checkbox checkbox-primary">
                                        <input id="cat{{ $category->id }}" type="checkbox" name="categories[]" value="{{ $category->id }}" {{ in_array(
                                                 $category->id,
                                                 old('categories', $property->categories->pluck('id')->toArray())
                                               ) ? 'checked' : '' }}>
                                        <label for="cat{{ $category->id }}">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group col-md-4">
                                <select name="status" class="form-control">
                                    @foreach(App\Models\Property::statusLabels() as $key => $label)
                                        <option value="{{ $key }}"
                                            {{ old('status', $property->status ?? 0) == $key ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- SUBMIT --}}
                        <div>
                            <button class="btn btn-base" type="submit">Update Property</button>
                        </div>

                    </form>


                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->
@endsection
