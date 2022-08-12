@extends('layouts.admin')

@section('title', 'Messages' . ' - ' . $billing->name)

@section('content')

    <section>
        <div class="container">
            <br>
        <div class="card" style="width:18rem;">
            <div class="card text-center shadow rounded">
                <div class="card-body">
                  <h1 class="card-title"></h1>
                  <p class="card-text">
                      <h4>First Name: {{ $billing->billing_fname }}</h4>
                      <h4>Last Name: {{ $billing->billing_lname }}</h4> <hr>
                    <h4>Message content:</h4>  <p>{{ $billing->billing_company_name }}</p>
                    </p>
                </div>
              </div>
        </div>
        </div>
        <br>
    </section>
@endsection
