  <!-- section -->
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
          <a href="{{route('home')}}">Home</a> <span class="mx-2 mb-0">/</span>
          <a class="text-black" href="{{route('contact')}}">Contact</a>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h3 mb-5 text-black">Get In Touch</h2>
        </div>

  <section id="contact" class="dark_bg_blue layout_padding cross_layout padding_top_0 margin_top_0">
    <div class="container">

        <div class="col-md-12">

  <form action="{{route('contact')}}" method="post">
@csrf
    <div class="p-3 p-lg-5 border">
      <div class="form-group row">
        <div class="col-md-6">

          <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('c_fname') is-invalid @enderror " id="c_fname"
           name="c_fname" value="{{old('c_fname')}}" />
          @error('c_fname')
          <div class="innalid-feedback">{{$message}}</div>
        @enderror
        </div>

        <div class="col-md-6">
          <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control @error('c_lname') is-invalid @enderror" id="c_lname"
           name="c_lname"value="{{old('c_lname')}}" />
           @error('c_lname')
           <div class="innalid-feedback">{{$message}}</div>
         @enderror

      </div>
        </div>


      <div class="form-group row">
        <div class="col-md-12">
          <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control  @error('c_email') is-invalid @enderror" id="c_email"
          name="c_email" placeholder="" value="{{old('c_email')}}"/>
          @error('c_email')
          <div class="innalid-feedback">{{$message}}</div>
        @enderror
        </div>
        </div>

      <div class="form-group row">
        <div class="col-md-12">
          <label for="c_subject" class="text-black">Subject </label>
          <input type="text" class="form-control @error('c_subject') is-invalid @enderror" id="c_subject" name="c_subject" value="{{old('c_subject')}}"/>
          @error('c_subject')
          <div class="innalid-feedback">{{$message}}</div>
        @enderror
        </div>
        </div>


      <div class="form-group row">
        <div class="col-md-12">
          <label for="c_message" class="text-black">Message </label>
          <textarea class="form-control @error('c_message') is-invalid @enderror"  name="c_message"
           id="c_message" cols="30" rows="7" class="form-control">{{ old('c_message') }}</textarea>
           @error('c_message')
           <div class="invalid-feedback">{{ $message }}</div>
       @enderror
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-12">
          <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
        </div>
      </div>
    </div>
  </form>
</div>
