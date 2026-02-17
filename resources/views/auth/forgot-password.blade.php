@extends('admin.layouts.auth')

@section('title', 'Forget Password')

@section('content')
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
                                <h3>Password Reset</h3>
                                <small><strong>Please fill the form to recover your password</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <p>Fill with your mail to receive instructions on how to reset your password.</p>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" class="form-control" name="email" placeholder="Enter your email" type="email">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-base btn-block">Send Password Reset Link</button>
                            </div>
                        </form>
                        @if (session('status'))
                            <p>{{ session('status') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

@endsection