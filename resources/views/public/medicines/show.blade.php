@extends('layouts.app')

@section('title', $medicine->brand . ' ' . $medicine->name)

@section('content')
    <section>
        <div class="container my-5">
            {{-- <div class="card my-2 shadow bg-white rounded">
                <div class="card-body">
                    <h1 class="card-title"> {{ $medicine->year }} {{ $medicine->brand }} {{ $medicine->model }} </h1>
                </div>
            </div> --}}
            {{-- <div class="card"> --}}
                {{-- @foreach ($medicine->getMedia() as $media)
                    {{ $media }}
                @endforeach --}}
                <div class="row">

                    <div class="col-md-4">
                        <div class="card-body">
                    <h1 class="card-title text-primary"> Basic Info </h1>
                    <p class="card-text">

                    <h4>Price:</h4> {{ $medicine->price }} SYP <br>
                    {{-- <h4>COLOR:</h4> {{ $medicine->colors->reduce(function ($carry, $color) {return $carry . $color->name . ', ';}) }} <br> --}}
                    {{-- <h4>COUNTRY:</h4>{{ $medicine->country }} <br> --}}
                    <h5>More detials:</h5> {!! $medicine->description !!} <br>
                    </p>
                </div>
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
