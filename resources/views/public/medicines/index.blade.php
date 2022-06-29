@extends('layouts.app')

@section('content')
<div class="container">
<div class="container">

    <div class="row py-5">
        <div class="col-12">
            <form action="">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="hidden" name="q" value="{{ request()->q }}">
                            <label>Categories Filter :</label>
                            <select name="category" class="custom-select col-md" style="width: 25%">
                                <option value="">All</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == request()->category ? 'selected' : '' }}>{{ $category->name }}
                                        ({{ $category->medicines->count() }})
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-md btn-success">Filter</button>

                            <div class="row py-5">
                                @foreach ($medicines as $medicine)


                                <div class="col-md-4">
                              <a href="{{route('medicines.show',$medicine)}}">
                                  <h4>
                                      {{$medicine->name}}
                                      {{-- {{$medicine->type}} --}}
                                  </h4>
                                  <h6>{{ $medicine->category->name }}

                              </a>


                                </div>

                            @endforeach
                            </div>



</div>
</div>



@endsection
