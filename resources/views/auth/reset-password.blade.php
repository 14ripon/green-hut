@extends('admin.layouts.auth')

@section('title', 'Set Password')

@section('content')



@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (session('status'))
    <p style="color:green">{{ session('status') }}</p>
@endif


       <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-refresh-2"></i>
                            </div>
                            <div class="header-title">
                                <h3>Set Password</h3>
                                <small><strong>Please fill the form to recover your password</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('password.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <p>Fill with your mail to receive instructions on how to reset your password.</p>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Please enter you email adress" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">New Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="pass" type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="rpass" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>  
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-base btn-block">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

@endsection