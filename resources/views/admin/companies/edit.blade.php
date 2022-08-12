@extends('layouts.admin')
@section('title', 'Edit company | ' . $company->name )
@section('content')


<br>
    <section class="section py-10" style="padding-bottom: 50px">
        <div class="container">
            <form action="{{ route('admin.companies.update', $company) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label  class="col-md-6"   for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror col-md-6" id="name"
                        name="name" value="{{ old('name',$company->name )}}" placeholder="">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    </div>
@endsection
