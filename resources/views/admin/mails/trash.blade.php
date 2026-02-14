@extends('admin.mails.mails-layout')

@section('title', 'Inbox')

        @section('mail-page-header')
        <!-- <div class="col-sm-8 float-right">
            <div class="inbox-toolbar btn-toolbar text-right">
                <div class="btn-group">
                    <a href="" class="btn btn-base"><span class="fa fa-pencil-square-o"></span></a>
                </div>
                <div class="btn-group mx-1">
                    <a href="{{ route('mails.trash') }}" class="btn btn-default"><span class="fa fa-reply"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-reply-all"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a>
                </div>
                <div class="btn-group ml-1 d-none d-lg-block">
                    <button type="button" class="btn btn-default"><span class="fa fa-print"></span></button>
                </div>
                <div class="btn-group ml-1">
                    <button type="button" class="text-center btn btn-danger"><span class="fa fa-exclamation"></span></button>
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-original-title="Delete"><span class="fa fa-trash"></span></button>
                </div>
            </div>
        </div> -->
        @endsection


        
        @section('mail-page-content')
        <div class="col-md-9 border border-right-0 border-top-0 border-bottom-0 pl-md-0">
            <div class="p-0 inbox-mail">
                <div class="mailbox-content">
                    

                @foreach ($mails as $mail)
                <div class="mailbox_inner">
                    <!-- <div class="i-check mail-check">
                        <div class="pl-0 checkbox checkbox-success">
                            <input id="mailid{{ $loop->iteration }}" type="checkbox">
                            <label for="mailid{{ $loop->iteration }}"></label>
                        </div>
                    </div> -->
                    <a href="{{ route('mails.trash.show', $mail->id) }}" class="inbox_item">
                        <div class="inbox-avatar">
                            <img src="{{ asset('admin/assets/dist/img/avatar.png') }}" alt="img">
                            <div class="inbox-avatar-text">
                                <div class="avatar-name">{{ $mail->full_name }}</div>
                                <div><small><span><strong>From: </strong><span> {{ $mail->email }}</span></span></small></div>
                            </div>
                            <div class="inbox-date d-none d-lg-block">
                                <!-- <div class="date">9:27 AM</div> -->
                                <div class="date">{{ \Carbon\Carbon::parse($mail->created_at)->format('g:i A') }}</div>
                                <div><small>{{ \Carbon\Carbon::parse($mail->created_at)->format('D M Y') }}</small></div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="m-3">{{ $mails->links() }} </div>
                </div>
            </div>
        </div>

        
        @endsection


@push('js')


@endpush
