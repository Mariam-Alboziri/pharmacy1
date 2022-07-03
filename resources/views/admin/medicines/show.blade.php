@extends('layouts.app')

@section('title', $medicine->brand . ' ' . $medicine->name)

@section('content')
    <section>
        <div class="container my-5">
            <div class="card my-2 shadow bg-white rounded">
                <div class="card-body">
                    <h1 class="card-title"> {{ $medicine->year }} {{ $medicine->brand }} {{ $medicine->model }} </h1>
                </div>
            </div>
            <div class="card mb-3">
                {{-- @foreach ($medicine->getMedia() as $media)
                    {{ $media }}
                @endforeach --}}
                <div class="card-body">
                    <h1 class="card-title text-primary"> Basic Info </h1>
                    <p class="card-text">
                    <h4>PRICE:</h4> {{ $medicine->price }} SYP <br>
                    {{-- <h4>COLOR:</h4> {{ $medicine->colors->reduce(function ($carry, $color) {return $carry . $color->name . ', ';}) }} <br> --}}
                    {{-- <h4>COUNTRY:</h4>{{ $medicine->country }} <br> --}}
                    <h4>MORE DETIALS:</h4> {!! $medicine->description !!} <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
<style>
    h4 {
        display: inline;
    }
</style>
@endpush
