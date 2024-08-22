@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('partials.sidebar')
            </div>
            <div class="col-md-9">
                <h2>Dashboard</h2>
                {{-- Dashboard content goes here --}}
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
