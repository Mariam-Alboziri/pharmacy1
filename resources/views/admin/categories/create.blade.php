@extends('layouts.admin')

@section('title', 'Add a new category')

@section('content')

<br>
    <section class="section py-10" style="padding-bottom: 50px">
        <div class="container">
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-6" for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror col-md-6" id="name" name="name"
                        placeholder="" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror"
                    name="featured_image" id="featured_image" accept="image/*" rows="5"> {{ old('featured_image') }}</textarea>
                    @error('featured_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
