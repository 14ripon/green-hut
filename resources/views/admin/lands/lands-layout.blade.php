@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <!--mailbox wrapper-->
            <div class="mailbox">
                <div class="mailbox-header">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="inbox-avatar"><img src="{{ asset('admin/assets/dist/img/user2-160x160.png') }}" class="img-circle border-green" alt="img">
                                <div class="inbox-avatar-text">
                                    <div class="avatar-name">{{ auth()->user()->name }}</div>
                                    <div><small>Mailbox</small></div>
                                </div>
                            </div>
                        </div>

                        @yield('mail-page-header')

                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-3 pr-md-0">
                        <div class="p-0 inbox-nav">
                            <div class="mailbox-sideber">
                                <div class="profile-usermenu">
                                    <h6>Mailbox</h6>
                                    <ul class="nav">
                                        <li class="{{ request()->routeIs('lands.index') ? 'active' : '' }}">
                                            <a href="{{ route('lands.index') }}"><i class="fa fa-inbox"></i>Professionals 
                                            @if($globalLandUnreadCount > 0)
                                            <small class="label float-right bg-green p-1 rounded text-white">{{ $globalLandUnreadCount }}</small>
                                            @endif
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>Send Mail</a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i>Starred</a></li>
                                        <li class="{{ request()->routeIs('mails.trash','mails.trash.*') ? 'active' : '' }}">
                                            <a href="{{ route('mails.trash') }}"><i class="fa fa-trash-o"></i>Tresh </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-paperclip"></i>Attachments</a></li>
                                    </ul>
                                    <h6>Other</h6>
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-exclamation"></i>Spam</a></li>
                                        <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                    </ul>
                                    <h6>Tags</h6>
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-circle color-green"></i>#sometag</a></li>
                                        <li><a href="#"><i class="fa fa-circle color-red"></i>#anothertag</a></li>
                                        <li><a href="#"><i class="fa fa-circle color-yellow"></i>#anotheronetag</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Page Content -->
                        @yield('mail-page-content')

                    </div>
            </div><!-- /mailbox wrapper-->
            
        </div><!-- /content -->
        </div><!-- /content-wrapper -->

@endsection