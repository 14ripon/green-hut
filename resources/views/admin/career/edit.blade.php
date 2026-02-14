@extends('admin.layouts.app')

@section('title', 'Create a Career Ticket')

@section('content')


    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Career Ticket Edit Form</h1>
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
                        Career Ticket Form
                    </div>
                    <div class="dropdown"></div>
                </div>
                <div class="card-block p-3 basic-forms">
                    <form method="POST" action="{{ route('career-admin.update', $career->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="{{ $career->title }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <textarea class="form-control" name="description">{{ $career->description }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option @selected($career->status === 'open') value="open">Open</option>
                                    <option @selected($career->status === 'in_progress') value="in_progress">In Progress</option>
                                    <option @selected($career->status === 'pending') value="pending">Pending</option>
                                    <option @selected($career->status === 'closed') value="closed">Closed</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Priority</label>
                                <select class="form-control" name="priority">
                                    <option @selected($career->priority === 'low') value="low">Low</option>
                                    <option @selected($career->priority === 'medium') value="medium">Medium</option>
                                    <option @selected($career->priority === 'high') value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Assigned To</label>
                                <input class="form-control" type="text" name="assigned_to"  value="{{ $career->assigned_to }}">
                            </div>
                            
                        </div>


                        <button class="btn btn-base" type="submit">Update</button>
                    </form>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection
