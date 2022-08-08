@extends('layouts.app')

@section('title', $category->name)

@section('content')
@include('partials.sidebarnos')
    <div class="container my-5">
        <div class="full">

            <div class="col">
                {{-- <h3><a href="{{ route('admin.medicines.create') }}" class="text-primary stretched-link">Add more!</a></h3> --}}
            </div>
        </div>

        <div class="row">
            @forelse ( $medicines as $medicine )


            <div class="col-md-4">
                <div class="card cardhov my-2">
                    <a href="{{ route('medicines.show', $medicine) }}"><img src="/storage/{{ $medicine->featured_image }}" width="100%"></a>


            <div class="card-body">
                <h5 class="card-title">{{ $medicine->name }}</h5>
                <a href="{{ route('medicines.show', $medicine) }}" class="text-primary stretched-link"> show more
                    info
                </a>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            @empty

            <div class="col-md-12">
                <div class="p-2">
                    <h4>NO Products Available for {{ $category->name }}</h4>
                </div>

            </div>


            @endforelse
        </div>

        <br><br>
        <div class="row justify-content-center">

        {{-- {{ $medicines->links() }} --}}
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
