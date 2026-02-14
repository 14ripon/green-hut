@extends('admin.mails.mails-layout')

@section('title', 'Mail Details')

        @section('mail-page-header')
        <div class="col-sm-8 float-right">
            <div class="inbox-toolbar btn-toolbar text-right">
                <div class="btn-group">
                    <!-- <a href="" class="btn btn-base"><span class="fa fa-pencil-square-o"></span></a> -->
                </div>
                <div class="btn-group mx-1">
                    <a href="{{ route('mails.trash') }}" class="btn btn-default"><span class="fa fa-reply"></span></a>
                    <!-- <a href="" class="btn btn-default"><span class="fa fa-reply-all"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a> -->
                </div>
                <div class="btn-group ml-1 d-none d-lg-block">
                    <!-- <button type="button" class="btn btn-default"><span class="fa fa-print"></span></button> -->
                </div>
                <div class="btn-group ml-1">
                    <!-- <button type="button" class="text-center btn btn-danger"><span class="fa fa-exclamation"></span></button> -->
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-original-title="Delete"><span class="fa fa-trash"></span></button>
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
                        <div><small><strong>Mobile: </strong> <a href="tel:{{ $mail->phone }}">{{ $mail->phone }}</a></small></div>
                    </div>
                    <div class=" text-right">
                        <div><span class="bg-green badge"><small>OPPORTUNITIES</small></span></div>
                        <div>Mail Time: <small>{{ \Carbon\Carbon::parse($mail->created_at)->format('D M Y') }}, {{ \Carbon\Carbon::parse($mail->created_at)->format('g:i A') }}</small></div>
                    </div>
                </div>
                <div class="inbox-mail-details fs-13 p-3">
                    <h3>Meet Time: {{ \Carbon\Carbon::parse($mail->preferred_time)->format('D M Y') }}, {{ \Carbon\Carbon::parse($mail->preferred_time)->format('g:i A') }}</h3>


                    <div class="mt-3 border p-3">
                        <p class="pb-3 fs-13">click here to <a href="#">Reply</a> or <a href="compose.html">Forward</a></p>
                    </div> 
                </div>
            </div>
        </div>
        @endsection


@push('js')


@endpush