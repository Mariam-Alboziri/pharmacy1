@include('partials.sidebarnos')

    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0">
              <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
              <strong class="text-black">Checkout</strong>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="bg-light rounded p-3">
                {{-- <p class="mb-0">Returning customer? <a href="#" class="d-inline-block">Click here</a> to login</p> --}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf

                  <h2 class="h3 mb-3 text-black">Billing Details</h2>
                  <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                      <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                      <select id="c_country" class="form-control">
                        <option value="1">Select a country</option>
                        <option value="2">bangladesh</option>
                        <option value="3">Algeria</option>
                        <option value="4">Afghanistan</option>
                        <option value="5">Ghana</option>
                        <option value="6">Albania</option>
                        <option value="7">Bahrain</option>
                        <option value="8">Colombia</option>
                        <option value="9">Dominican Republic</option>
                      </select>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">

                        {{-- <label for="model">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            placeholder="" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}



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
                    {{-- <div class="form-group">
                      <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div> --}}
                    {{-- <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                      </div>
                      <div class="col-md-6">
                        <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                      </div>
                    </div> --}}
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
                    {{-- <div class="form-group">
                      <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account"
                        role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1"
                          id="c_create_account"> Create an account?</label>
                      <div class="collapse" id="create_an_account">
                        <div class="py-2">
                          <p class="mb-3">Create an account by entering the information below. If you are a returning customer
                            please login at the top of the page.</p>
                          <div class="form-group">
                            <label for="c_account_password" class="text-black">Account Password</label>
                            <input type="email" class="form-control" id="c_account_password" name="c_account_password"
                              placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
                        href="#ship_different_address" role="button" aria-expanded="false"
                        aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address">
                        Ship To A Different Address?</label>
                      <div class="collapse" id="ship_different_address">
                        <div class="py-2">
                          <div class="form-group">
                            <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                            <select id="c_diff_country" class="form-control">
                              <option value="1">Select a country</option>
                              <option value="2">bangladesh</option>
                              <option value="3">Algeria</option>
                              <option value="4">Afghanistan</option>
                              <option value="5">Ghana</option>
                              <option value="6">Albania</option>
                              <option value="7">Bahrain</option>
                              <option value="8">Colombia</option>
                              <option value="9">Dominican Republic</option>
                            </select>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6">
                              <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                            </div>
                            <div class="col-md-6">
                              <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-12">
                              <label for="c_diff_companyname" class="text-black">Company Name </label>
                              <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-12">
                              <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_address" name="c_diff_address"
                                placeholder="Street address">
                            </div>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6">
                              <label for="c_diff_state_country" class="text-black">State / Country <span
                                  class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                            </div>
                            <div class="col-md-6">
                              <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                                  class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                            </div>
                          </div>
                          <div class="form-group row mb-5">
                            <div class="col-md-6">
                              <label for="c_diff_email_address" class="text-black">Email Address <span
                                  class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                            </div>
                            <div class="col-md-6">
                              <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone"
                                placeholder="Phone Number">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <div class="form-group">
                      <label for="note" class="text-black">Order Notes</label>
                      <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                        placeholder="Write your notes here..."></textarea>
                    </div>
                  </div>

            </form></div>
            <div class="col-md-6">

              <div class="row mb-5">
                <div class="col-md-12">
                  {{-- <h2 class="h3 mb-3 text-black">Coupon Code</h2> --}}
                  <div class="">

                    {{-- <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label> --}}
                    {{-- <div class="input-group w-75">
                      <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code"
                        aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Apply</button>
                      </div>
                    </div> --}}

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

                          {{-- <td>{{ Cart::getSubTotal() }} </td> --}}
                        </tr>

                        @endforeach
                        {{-- <tr>
                          <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                          <td class="text-black">$350.00</td>
                        </tr> --}}
                        <tr>
                          <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                          <td class="text-black font-weight-bold"><strong>{{ Cart::getTotal() }}</strong></td>
                        </tr>

                    </tbody>
                    </table>

                    {{-- <div class="border mb-3">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                          aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                      <div class="collapse" id="collapsebank">
                        <div class="py-2 px-4">
                          <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                            payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>

                    <div class="border mb-3">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                          aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                      <div class="collapse" id="collapsecheque">
                        <div class="py-2 px-4">
                          <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                            payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>

                    <div class="border mb-5">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                          aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                      <div class="collapse" id="collapsepaypal">
                        <div class="py-2 px-4">
                          <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                            payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div> --}}

                    <div class="form-group">
                      <a href="{{ route('thanckyou.store') }}">
                          <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.html'">Place
                            Order</button>
                      </a>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
