@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('sections.home')
    @include('sections.products')
    {{-- @include('sections.contact') --}}
    {{-- @include('sections.customers') --}}
    @include('sections.signup')
@endsection
