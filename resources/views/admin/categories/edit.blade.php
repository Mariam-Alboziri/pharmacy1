@extends('layouts.app')
@section('title', 'Edit category | ' . $category->name )
@section('content')
    <section class="section py-10" style="padding-bottom: 50px">
        <div class="container">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name',$category->name )}}" placeholder="">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">SYP</span>
                        </div>
                        <input name="price" id="price" type="number" min="100"
                            value="{{ old('price',$category->price) }}"step="50"
                            class="form-control @error('price') is-invalid @enderror">
                    </div>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    </div>
@endsection
