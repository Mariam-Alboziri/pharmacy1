@extends('layouts.app')

@section('content')

<section>
    <div class="container">
    <div class="card" style="width:18rem;">
        <div class="card text-center shadow rounded">
            <div class="card-body">
              <h1 class="card-title">{{ $medicine->name }}</h1>
              <p class="card-text">
                  <h4>Price: {{ $medicine->price }}</h4>
                  {{-- <h4>Last Name: {{ $message->c_lname }}</h4> <hr> --}}
                {{-- <h4>Message content:</h4>  <p>{{ $message->c_message }}</p> --}}
                {{-- </p> --}}
            </div>
          </div>
    </div>
    </div>
</section>


@endsection
