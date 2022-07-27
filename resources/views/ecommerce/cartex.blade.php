@extends('layouts.app')
@section('title', 'your cart')

@include('partials.sidebarnos')

    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0">
              <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
              <strong class="text-black">Cart</strong>
            </div>
          </div>
          @if ($message = Session::get('success'))
          <div class="p-4 mb-3 bg-green-400 rounded">
              <p class="text-green-800">{{ $message }}</p>
          </div>
      @endif

          @if ( Cart::getTotalQuantity()>0)

          <h2>  {{  Cart::getTotalQuantity() }} item in shopping cart </h2>



        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="site-blocks-table">
                <table class="table table-bordered">
                    <thead>
                        <tr class="h-12 uppercase">
                          <th class="hidden md:table-cell"></th>
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
                            <button class="px-4 py-2 text-white bg-red-600">x</button>
                        </form>

                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                  <div>
                   Total: ${{ Cart::getTotal() }}
                  </div>
                  <div>
                    <form action="{{ route('cart.clear') }}" method="POST">
                      @csrf
                      <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                    </form>
                  </div>



                {{-- <div>
                    <form action="{{ route('cart.clear') }}" method="POST">
                      @csrf
                      <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                    </form>
                  </div>
              </div>
            </form>
          </div> --}}





          <div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                  <button class="btn btn-primary btn-md btn-block">Update Cart</button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button>
                </div>
              </div>

@else

<h3> No items in cart</h3>
<br>
<a href="{{ route('medicines.index') }}" class="btn btn-outline-primary btn-md ">Continue Shopping </a>
<br> <br>

@endif

              <div class="row">
                <div class="col-md-12">
                  <label class="text-black h4" for="coupon">Coupon</label>
                  <p>Enter your coupon code if you have one.</p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">$230.00</strong>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">$230.00</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <a href="{{ route('checkout.index') }}">
                          <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Proceed To
                            Checkout</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
