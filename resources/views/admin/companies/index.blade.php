@extends('layouts.admin')

@section('title', 'Companies')

@section('content')



<br>
    <div class="container my-5">
        <div class="full">
            <h1>Here's Your Companies !</h1>
            <div class="col">
                @if($companies->count()!=0)<h3><a href="{{ route('admin.companies.create') }}" class="text-primary stretched-link">Add more!</a></h3>@endif
            </div>
        </div>
<br>
        <div class="row">
            @forelse ($companies as $company)
                <div class="col-md-4">

                    <div class="card cardhov my-2">
                        <img src="/storage/{{ $company->featured_image }}" width="100%">
                        {{-- <img src="/images/hero_1.jpg" width="100%"> --}}
                        {{-- {{ $company->getFirstMedia() }} --}}

                        <div class="card-body">
                            <h3 class="card-title">{{ $company->name }} ({{ $company->medicines->count() }})</h3>
                            {{-- <p class="card-text">Capacity: {{ $company->capacity }}</p> --}}
                            <a href="{{ route('admin.companies.show',$company) }}" class="text-primary stretched-link"> show Medicines in Category</a>
                            <div class="row my-2">
                                <div class="col">
                                    <form action="{{ route('admin.companies.edit', $company) }}" method="PUT"> @csrf
                                        <button class="btn ma-2" type="submit"
                                            style="background-color: #161C34; color:white;">Edit</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#delete-modal" style="background-color: #F36B2A; color:white;">
                                        DELETE
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete-modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE THIS CATEGORY
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ARE YOU SURE YOU WANT TO DELETE THIS COMPANIES!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <form action="{{ route('admin.companies.destroy', $company) }}"
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
                @empty
                <div class="col">
                    There are no companies now, <a href="{{ route('admin.companies.create') }}">please create one</a>!
                </div>
            @endforelse
        </div>
        {{-- {{ $companies->links() }} --}}
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
