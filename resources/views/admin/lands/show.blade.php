@extends('admin.lands.lands-layout')

@section('title', 'Mail Details')

        @section('mail-page-header')
        <div class="col-sm-8 float-right">
            <div class="inbox-toolbar btn-toolbar text-right">
                <div class="btn-group">
                    <a href="{{ route('lands.index') }}" class="btn btn-base"><span class="fa fa-arrow-left"></span></a>
                </div>
                <div class="btn-group mx-1">
                    <a href="{{ route('mails.index') }}" class="btn btn-default"><span class="fa fa-pencil-square-o"></span></a>
                    <!-- <a href="" class="btn btn-default"><span class="fa fa-reply-all"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a> -->
                </div>
                <!-- <div class="btn-group ml-1 d-none d-lg-block">
                    <button type="button" class="btn btn-default"><span class="fa fa-print"></span></button>
                </div> -->

                <div class="btn-group ml-1">
                    <form action="{{ route('lands.destroy', $mail->id) }}"
                        method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <span class="fa fa-trash"></span> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endsection

        @section('mail-page-content')
        
        <div class="col-md-9 pl-md-0 border border-right-0 border-top-0 border-bottom-0">
            <div class="inbox-mail">
                <div class="inbox-avatar p-3 border-top-0 border-left-0 border-right-0 border">
                    <img src="{{ asset('admin/assets/dist/img/avatar5.png') }}" class="border-green hidden-xs hidden-sm" alt="img">
                    <div class="inbox-avatar-text">
                        <div class="avatar-name"><strong>From: </strong>
                            {{ $mail->full_name }} - <em>{{ $mail->email }}</em>
                        </div>
                        <div><small><strong>Mobile: </strong> <a href="tel:{{ $mail->contact_number }}">{{ $mail->contact_number }}</a></small></div>
                    </div>
                    <div class=" text-right">
                        <div><span class="bg-green badge"><small>OPPORTUNITIES</small></span></div>
                        {{ $mail->created_at->diffForHumans() }}
                        <div><i class="fa fa-clock-o"></i> <small>{{ \Carbon\Carbon::parse($mail->created_at)->format('D M Y') }}, {{ \Carbon\Carbon::parse($mail->created_at)->format('g:i A') }}</small></div>
                    </div>
                </div>
                <div class="inbox-mail-details fs-13 p-3">
                    
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Locality:</th>
                            <td>{{ $mail->locality }}</td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td>{{ $mail->address }}</td>
                        </tr>
                        <tr>
                            <th>Size in Katha:</th>
                            <td>{{ $mail->size_in_katha }}</td>
                        </tr>
                        <tr>
                            <th>Road Width:</th>
                            <td>{{ $mail->road_width }}</td>
                        </tr>
                        <tr>
                            <th>Category:</th>
                            <td>{{ $mail->category }}</td>
                        </tr>
                        <tr>
                            <th>Faciing:</th>
                            <td>{{ $mail->facing }}</td>
                        </tr>
                        <tr>
                            <th>Attractive Features:</th>
                            <td>{{ $mail->attractive_features }}</td>
                        </tr>
                        <tr>
                            <th>Owner Name:</th>
                            <td>{{ $mail->owner_name }}</td>
                        </tr>
                        <tr>
                            <th>Contact Number:</th>
                            <td>{{ $mail->contact_number }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $mail->email }}</td>
                        </tr>

                    </table>

                    <div class="mt-3 border p-3">
                        <p class="pb-3 fs-13"><a href="{{ route('lands.reply', $mail->id) }}">Click to Reply</a></p>
                    </div> 
                </div>
            </div>
        </div>
        @endsection


@push('js')


@endpush