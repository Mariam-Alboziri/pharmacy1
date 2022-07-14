@extends('layouts.app')

@section('title', $product->name)

@section('content')
    @include('ecommerce.product')
@endsection
