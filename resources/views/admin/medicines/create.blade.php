@extends('layouts.app')

@section('title', 'Add a new product')

@push('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: '',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endpush

    @section('content')
    @include('partials.sidebarnos')
    <section class="section py-10" style="padding-bottom: 50px">
    <div class="container my-5">
        <form action="{{ route('admin.medicines.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="model">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            placeholder="" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="brand">Company</label>
                        <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand"
                            placeholder="" value="{{ old('brand') }}">
                        @error('brand')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Medicine category</label>
                        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}

                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">SYP</span>
                            </div>
                            <input name="price" id="price" type="number" min="1000" step="500"
                                class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price')}}">
                        </div>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="featured_image">Featured image</label>
                <input class="form-control @error('featured_image') is-invalid @enderror" type="file" name="featured_image"
                    id="featured_image" accept="image/*" value="اختر ملف">
                @error('featured_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}
            {{-- <div class="form-group">
                <label for="images">Images</label>
                <input class="form-control @error('images') is-invalid @enderror" type="file" name="images[]"
                    id="images" accept="image/*" multiple>
                @error('images')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}


            <div class="form-group">
                <label for="featured_image">Featured Image</label>
                <input type="file" class="form-control @error('featured_image') is-invalid @enderror"
                name="featured_image" id="featured_image" accept="image/*" rows="5"> {{ old('featured_image') }}</textarea>
                @error('featured_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn" style="background-color: #F36B2A; color:white;">Submit</button>
        </form>
    </div>
    </section>
@endsection
