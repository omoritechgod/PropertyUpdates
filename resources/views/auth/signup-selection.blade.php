<!-- signup-selection.blade.php -->
@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Choose Your Signup Type</h2>
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <a href="{{ route('user.register') }}" class="btn btn-primary btn-block">Sign Up as User</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('agent.register') }}" class="btn btn-secondary btn-block">Sign Up as Agent</a>
        </div>
    </div>
</div>
@endsection
