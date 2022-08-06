@extends('layouts.app')

@section('title', 'users')

@section('content')



@include('partials.sidebarnos')

    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0">
              <a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
              <strong class="text-black">Checkout</strong>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf

                  <h2 class="h3 mb-3 text-black">Billing Details</h2>
                  <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">


                        <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror"

                      id="fname" name="fname"  value="{{ old('fname') }}" >
                        @error('fname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                      <div class="col-md-6">
                        <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lname" name="lname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="company" class="text-black">Company Name </label>
                        <input type="text" class="form-control" id="company" name="company">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                      </div>
                    </div>

                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="email" name="email">
                      </div>
                      <div class="col-md-6">
                        <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="note" class="text-black">Order Notes</label>
                      <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                        placeholder="Write your notes here..."></textarea>
                    </div>
                  </div>

                  <button type="submit" class="btn" style="background-color: #F36B2A; color:white;">Submit</button>

            </form></div>
            <div class="col-md-6">

              <div class="row mb-5">
                <div class="col-md-12">
                  <div class="">


                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="h3 mb-3 text-black">Your Order</h2>
                  <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                      <thead>
                        <th>Product</th>
                        {{-- <th>Total</th> --}}
                      </thead>
                      <tbody>
                         @foreach ($cartItems as $item)
                        <tr>

                              <td>  <a href="{{ route('cart.list') }}">{{ $item->name }}</a></td>
                              @endforeach
                          {{-- <td>{{ Cart::getSubTotal() }} </td> --}}
                        </tr>



                        <tr>
                          <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                          <td class="text-black font-weight-bold"><strong>{{ Cart::getTotal() }}</strong></td>
                        </tr>

                    </tbody>
                    </table>



                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
@endsection
