@extends('layouts.app')
@section('title','Add a new medicine')
@section('content')
<section class="section py-10" style="padding-bottom: 50px">
    <div class="container">
        <form action="{{route('medicines.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                 name="name" value="{{ old('name') }}"
                 placeholder="">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand"
                value="{{ old('brand') }}" placeholder="">
                @error('brand')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type') }}" placeholder="">
                @error('type')
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
                    value="{{ old('price') }}"step="50" class="form-control @error('price') is-invalid @enderror" >
                </div>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5"> {{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
    </div>
@endsection
