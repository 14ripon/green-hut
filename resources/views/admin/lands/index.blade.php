@extends('admin.lands.lands-layout')

@section('title', 'Professionals Inbox')

        @section('mail-page-header')
        <div class="col-sm-8 float-right">
            <div class="inbox-toolbar btn-toolbar text-right">
                <!-- <div class="btn-group">
                    <a href="compose.html" class="btn btn-base"><span class="fa fa-pencil-square-o"></span></a>
                </div>
                <div class="btn-group mx-1">
                    <a href="" class="btn btn-default"><span class="fa fa-reply"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-reply-all"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a>
                </div> -->
                <div class="btn-group ml-1 d-none d-lg-block">
                    <!-- <label class="mb-0 py-2" for="select-all"><input class="btn btn-default" type="checkbox" id="select-all"> Select All</label> -->
                </div>
                <div class="btn-group ml-1">
                    <!-- <button type="button" class="text-center btn btn-danger"><span class="fa fa-exclamation"></span></button> -->
                    
                    <!-- <button type="button" class="btn btn-danger" data-toggle="tooltip" data-original-title="Delete"><span class="fa fa-trash"></span> Delete</button> -->
                </div>
            </div>
        </div>
        @endsection


        
        @section('mail-page-content')
        <div class="col-md-9 border border-right-0 border-top-0 border-bottom-0 pl-md-0">
            <div class="p-0 inbox-mail">
                <div class="mailbox-content">    
                @foreach ($mails as $mail)

                <div class="mailbox_inner">
                    <!-- <div class="i-check mail-check">
                        <div class="pl-0 checkbox checkbox-success">
                            <input name="ids[]" id="mailid_{{ $mail->id }}" type="checkbox" value="{{ $mail->id }}">
                            <label for="mailid_{{ $mail->id  }}"></label>
                        </div>
                    </div> -->
                    <a href="{{ route('lands.show', $mail->id) }}" class="inbox_item {{ $mail->status == 1 ? 'unread' : '' }}">
                        <div class="inbox-avatar">
                            <img src="{{ asset('admin/assets/dist/img/avatar.png') }}" alt="img">
                            <div class="inbox-avatar-text">
                                <div class="avatar-name">{{ $mail->locality }}</div>
                                <div><small><span><strong>From: </strong><span> {{ $mail->email }}</span></span></small></div>
                            </div>
                            <div class="inbox-date d-none d-lg-block">
                                <!-- <div class="date">9:27 AM</div> -->
                                 {{ $mail->created_at->diffForHumans() }}
                                <div class="date">{{ \Carbon\Carbon::parse($mail->created_at)->format('g:i A') }}</div>
                                <div><small>{{ \Carbon\Carbon::parse($mail->created_at)->format('d M Y') }}</small></div>
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

<script>
    document.getElementById('select-all').addEventListener('click', function() {
        let checkboxes = document.querySelectorAll('input[name="ids[]"]');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
    </script>


@endpush
