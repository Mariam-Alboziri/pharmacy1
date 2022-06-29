@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($medicines as $medicine)


    <div class="col-md-4">
  <a href="{{route('admin.medicines.edit',$medicine)}}">
      <h4>
          {{$medicine->name}}
          {{-- {{$medicine->type}} --}}
      </h4>
      <h6>{{ $medicine->category->name }}

          <h5><form action="{{route('admin.medicines.destroy',$medicine)}}" method="POST">
            @csrf
            @method('DELETE') <button type="submit">Delete</button>

        </form></h5>
  </a>


    </div>
    @endforeach
</div>


@endsection
