@extends('layouts.app')
@section('title', 'your cart')

@include('partials.sidebarnos')


@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
          <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
          <strong class="text-black">Cart</strong>
        </div>
      </div>
    </div>
  </div>
<main class="my-8">
  <div class="">
  </div>
  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
          {{-- <div class="site-blocks-table"> --}}
      {{-- <div class="flex justify-center my-6"> --}}
          {{-- <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5"> --}}
            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif
              {{-- <h3 class=" text-bold">Cart List</h3> <br> --}}
            {{-- <div class="flex-1"> --}}
                <table class="table table-bordered">
              {{-- <table class="w-full text-sm lg:text-base" cellspacing="0"> --}}
                <thead>
                  <tr class="h-12 uppercase">
                    <th class="product-thumbnail">Image</th>
                    <th class="text-left">Name</th>
                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                      <span class="lg:hidden" title="Quantity">Qtd</span>
                      <span class="hidden lg:inline">Quantity</span>
                    </th>
                    <th class="hidden text-right md:table-cell"> price</th>
                    <th class="hidden text-right md:table-cell"> Remove </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                      </a>
                    </td>
                    <td>
                      <a href="#">
                        <p class="mb-2 md:ml-4">{{ $item->name }}</p>

                      </a>
                    </td>
                    <td class="justify-center mt-6 md:justify-end md:flex">
                      <div class="h-10 w-28">
                        <div class="relative flex flex-row w-full h-8">

                          <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                          <input type="number" name="quantity" value="{{ $item->quantity }}"
                          class="w-6 text-center bg-gray-300" />
                          <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                          </form>
                        </div>
                      </div>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <span class="text-sm font-medium lg:text-base">
                          ${{ $item->price }}
                      </span>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <button class="btn btn-primary height-auto btn-sm">x</button>
                    </form>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <div>
                <br>
               Total: ${{ Cart::getTotal() }}
               <br>


              <div class="">

                <form action="{{ route('cart.clear') }}" method="POST">
                  @csrf
                  <button class="btn btn-danger height-auto btn-sm">Remove All Cart</button>
                </form>

              </div>









<div class="row">
    <div class="col-md-12">
      <a href="{{ route('checkout.create') }}">
          <button class="btn btn-primary btn-lg " onclick="window.location='checkout.html'">Proceed To
            Checkout</button>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
        <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
                <br>
                  <button class="btn btn-outline-primary btn-md ">Continue Shopping</button>
              {{-- <button class="btn btn-primary btn-md btn-block">Update Cart</button> --}}
            </div>
            <div class="col-md-6">

            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {{-- <label class="text-black h4" for="coupon"></label> --}}

            {{-- </div> --}}
            {{-- <div class="col-md-8 mb-3 mb-md-0"> --}}
              {{-- <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code"> --}}
            {{-- </div> --}}
            {{-- <div class="col-md-4"> --}}
              {{-- <button class="btn btn-primary btn-md px-4">Apply Coupon</button> --}}
            {{-- </div> --}}
          </div>


    </div>
  </div>
</div>
</div>
</div>
</div>
</main>

@endsection

@push('js')

<script>
<script src="{{ asset('js/app.js') }}"></script>


    (function(){

        alert('hi')
    }) ();
</script>

@endpush




