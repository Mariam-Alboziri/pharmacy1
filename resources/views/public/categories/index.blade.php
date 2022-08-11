@extends('layouts.app')

@section('title', 'Categories')

@section('content')
@include('partials.sidebarnos')
    <div class="container my-5">

        <div class="row">
            @forelse ($categories as $category)
                <div class="col-md-4">

                    <div class="card cardhov my-2">



                        <div class="card-body">
                            <img src="/storage/{{ $category->featured_image }}" width="100%">
                            {{-- <img src="/images/hero_1.jpg" width="100%"> --}}
                            <br> <br>
                            <h3 class="card-title">{{ $category->name }} ({{ $category->medicines->count() }})</h3>

                            <a href="{{ route('categories.show',$category) }}" class="text-primary stretched-link"> Show products in category</a>

                        </div>
                    </div>
                </div>
                @empty
                <div class="col">
                    There are no categories now!
                </div>
            @endforelse
        </div>
        <br> <br>
        <div class="row justify-content-center">

            {{ $categories->withQueryString() }}
            </div>
    </div>
@endsection

@push('css')
    <style>
        .card:hover {
            border-radius: 0.75rem;
            border-color: #161C34;
            transition-delay: 0.1s
        }

        h1 {
            color: #161C34;
        }

    </style>
@endpush
