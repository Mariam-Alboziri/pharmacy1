@extends('layouts.nofooter')

@section('title', 'medicines')

@section('content')
@include('partials.sidebarnos')
    <div class="container my-5">
        <div class="full">
            <h1>Here's your products !</h1> <br>
            <div class="col">
                <h3><a href="{{ route('admin.medicines.create') }}" class="text-primary stretched-link">Add more!</a></h3>
            </div>
        </div>

        <div class="row">
            @foreach ($medicines as $medicine)


                        <div class="col-md-4">
                            <div class="card cardhov my-2">
                                <img src="/storage/{{ $medicine->featured_image }}" width="100%">

                        {{-- {{ $medicine->getFirstMedia() }} --}}

                        <div class="card-body">
                            <h5 class="card-title">{{ $medicine->name }}</h5>
                            <a href="{{ route('admin.medicines.show', $medicine) }}" class="text-primary stretched-link"> show more
                                info
                            </a>
                            <div class="row my-2">
                                <div class="col">
                                    <a class="btn ma-2" href="{{ route('admin.medicines.edit', $medicine) }}"
                                        style="background-color: #161C34; color:white;">
                                        Edit
                                    </a>
                                </div>
                                <div class="col">
                                    <button style="background-color: #F36B2A; color:white;"
                                            class="btn mb-2" data-toggle="modal"
                                            data-target="#delete-modal">Delete</button>
                                            <div class="modal fade" id="delete-modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE THIS MEDICINE
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ARE YOU SURE YOU WANT TO DELETE THIS PRODUCT!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <form action="{{ route('admin.medicines.destroy', $medicine) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="background-color: #F36B2A; color:white;"
                                                            class="btn mb-2" type="submit" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        <br><br>
        <div class="row justify-content-center">

        {{ $medicines->withQueryString() }}
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
