@extends('layouts.app')

@section('title',  $medicine->name)

@section('content')

@include('partials.sidebarnos')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span> <a
            href="{{ route('medicines.index') }}">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $medicine->name }}</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="/storage/{{ $medicine->featured_image }}" width="100%">
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{ $medicine->name }}</h2>
          <p>{{ $medicine->description }}.</p>


          <p> <strong class="text-primary h4">{{ $medicine->price }}</strong></p>



          <div class="mb-5">
            {{-- <div class="input-group mb-3" style="max-width: 220px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder=""
                aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div> --}}

          </div>
          {{-- <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p> --}}


          <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{ $medicine->id }}" name="id">
            <input type="hidden" value="{{ $medicine->name }}" name="name">
            <input type="hidden" value="{{ $medicine->price }}" name="price">
            <input type="hidden" value="{{ $medicine->featured_image }}"  name="image">
            <input type="hidden" value="1" name="quantity">
            <button class="btn btn-primary btn-lgrounded">Add To Cart</button>

</form>


          <div class="mt-5">
            <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Ordering Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false">Specifications</a>
              </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table custom-table">
                  <thead>
                    <th>Material</th>
                    <th>Description</th>
                    <th>Packaging</th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                      <td>1 BT</td>
                    </tr>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                      <td>144/CS</td>
                    </tr>
                    <tr>
                      <th scope="row">OTC022401</th>
                      <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                      <td>1 EA</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <table class="table custom-table">

                  <tbody>
                    <tr>
                      <td>HPIS CODE</td>
                      <td class="bg-light">999_200_40_0</td>
                    </tr>
                    <tr>
                      <td>HEALTHCARE PROVIDERS ONLY</td>
                      <td class="bg-light">No</td>
                    </tr>
                    <tr>
                      <td>LATEX FREE</td>
                      <td class="bg-light">Yes, No</td>
                    </tr>
                    <tr>
                      <td>MEDICATION ROUTE</td>
                      <td class="bg-light">Topical</td>
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

  <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
       <div class="col-lg-7">
         <h3 class="text-white">Register for discount up to 55% OFF</h3>
         <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam.</p>
         <p class="mb-0"><a href="{{ route('register') }}" class="btn btn-outline-white">Register</a></p>
       </div>
      </div>
    </div>
  </div>
@endsection
