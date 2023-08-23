@extends('layouts.base')

@section('body')
    @include('includes.navbar')

    <div class="container-fluid">
        @yield('content')
    </div>
@endsection
