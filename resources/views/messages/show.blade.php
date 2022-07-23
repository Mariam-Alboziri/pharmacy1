@extends('layouts.app')

@section('title', 'Messages' . ' - ' . $message->name)

@section('content')
@include('partials.sidebarnos')
    <section>
        <div class="container">
            <br>
        <div class="card" style="width:18rem;">
            <div class="card text-center shadow rounded">
                <div class="card-body">
                  <h1 class="card-title">{{ $message->name }}</h1>
                  <p class="card-text">
                      <h4>First Name: {{ $message->c_fname }}</h4>
                      <h4>Last Name: {{ $message->c_lname }}</h4> <hr>
                    <h4>Message content:</h4>  <p>{{ $message->c_message }}</p>
                    </p>
                </div>
              </div>
        </div>
        </div>
        <br>
    </section>
@endsection
