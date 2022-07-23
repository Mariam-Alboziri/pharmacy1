@extends('layouts.app')

@section('title', 'Category' . '-' . $category->name)

@section('content')

@include('partials.sidebarnos')


{{-- <div class="row">
    @foreach ($medicines as $medicine)
        <div class="col-md-4">
            <div class="card cardhov my-2">
                <img src="/storage/{{ $medicine->featured_image }}" width="100%">
                {{-- {{ $medicine->getFirstMedia() }} --}}

                {{-- <div class="card-body">
                    <h5 class="card-title"> {{ $medicine->name }}</h5>
                    <a href="{{ route('medicines.show', $medicine) }}" class="text-primary stretched-link"> show more
                        info
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div> --}}
{{-- {{ $medicines->links() }} --}}
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





@endsection
