@extends('layouts.app')

@section('content')
    <h1>Articles Page</h1>
    @include('shared.article-filters')
    @include('shared.article-table')
@endsection