@extends('layouts.app')
@section('title', 'Thank you')

@include('partials.sidebarnos')


@section('content')
<br>
    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong
                class="text-black">Thank You</strong></div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <span class="icon-check_circle display-3 text-primary"></span>
              <h2 class="display-3 text-black">Thank you!</h2>
              <p class="lead mb-5">You order was successfuly completed.</p>
              <p><a href="{{ route('medicines.index') }}" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to store</a></p>
            </div>
          </div>
        </div>
      </div>
      <footer class="site-footer bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
{{--
              <div class="block-7">
                <h3 class="footer-heading mb-4">About <strong class="text-primary">Pharmative</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                  sed dolorum excepturi iure eaque, aut unde.</p>
              </div> --}}

            </div>
@endsection
