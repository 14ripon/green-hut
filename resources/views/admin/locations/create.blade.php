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
                    <form action="{{ route('locations.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <input class="form-control" type="text" name="city" value="{{ old('city') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Area</label>
                                <input class="form-control" type="text" name="area" value="{{ old('area') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>State</label>
                                <input class="form-control" type="text" name="state" value="{{ old('state') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <input class="form-control" type="text" name="country" value="{{ old('country') }}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6 pl-0 checkbox checkbox-primary">
                            <input type="hidden" name="status" value="0">
                            <input id="checkbox2" type="checkbox" name="status" value="1">
                            <label for="checkbox2">Publish</label>
                        </div>

                        <button class="btn btn-base" type="submit">Save</button>
                    </form>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection
