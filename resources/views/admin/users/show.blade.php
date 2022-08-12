@extends('layouts.admin')

@section('title' . ' - ' . $user->name)

@section('content')

    <section>
        <div class="container">
            <div class="card  shadow bg-white rounded">

                <div class="card-body">

                    <h1 class="card-title"> {{ $user->name }} </h1>
                </div>
            </div>
            <div class="card mb-3">
                <img src="/images/user.png" width="30%">
                <div class="card-body">
                    <h1 class="card-title text-primary"> Basic Info </h1>
                    <p class="card-text">
                    <h4>Name:</h4> Mr. {{ $user->name }} <br>
                    <h4>Email:</h4> {{ $user->email }} <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
<style scoped>
    h4 {
        display: inline;
    }

</style>
