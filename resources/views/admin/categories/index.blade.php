@extends('layouts.app')
@section('title', 'Categories')

@section('content')
    <section class="section layout_padding">
        <div class="container">
            <div class="row">
                @forelse ($categories as $category)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('categories.edit',$category)}}">
                                <h3 class="card-title">{{ $category->name }}</h3>
                                <p class="card-text">Price: {{ $category->price }}</p>
                            </div>
                        </div>
                        <h5><form action="{{route('categories.destroy',$category)}}" method="POST">
                            @csrf
                            @method('DELETE') <button type="submit">Delete</button>

                        </form></h5>
                  </a>
                    </div>
                    @empty
                    <div class="col">
                        There are no categories now, <a href="{{ route('categories.create') }}">please create one</a>!
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
