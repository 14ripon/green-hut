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
                    <h1>Career Ticket</h1>
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
                        Career Ticket
                    </div>
                    <div class="dropdown"></div>
                </div>
                <div class="card-block p-3 basic-forms">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover my-2">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Assigned To</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($careers as $career)
                                <tr>
                                    <td>#{{ $career->id }}</td>
                                    <td>{{ $career->title }}</td>
                                    <td>{{ $career->description }}</td>
                                    <td>{{ $career->status }}</td>
                                    <td>{{ $career->priority }}</td>
                                    <td>{{ $career->assigned_to }}</td>
                                    <td>{{ $career->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('career-admin.edit',$career->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <form action="{{ route('career-admin.destroy', $career->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure?')"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('career-admin.create') }}" class="btn btn-base md-trigger mb-2 mr-1">Add New Ticket</a>
                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection

@push('js')


@endpush
