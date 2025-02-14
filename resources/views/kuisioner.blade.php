@extends('layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success" id="sessionSuccess" data-success="{{ session('success') }}"></div>
    @endif
@endsection
