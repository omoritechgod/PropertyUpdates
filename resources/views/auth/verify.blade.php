@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before accessing your account, please verify your email by clicking the link we sent to your inbox.') }}</p>
                    <p>{{ __('If you did not receive the email, you can request another one below.') }}</p>
                    
                    <!-- Resend Verification Email Form -->
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to request another email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
