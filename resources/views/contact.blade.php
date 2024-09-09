@extends('layouts.master')

@section('content')

{{-- <body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div> --}}

  

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <img src="images/bg1.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="form_container">
            <form action="{{ route('store') }}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="First Name" name="first_name" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Last Name" name="last_name" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="Email" name="email" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" />
                </div>
              </div>
              <div class="form-group ">
                <input type="text" class="message-box" placeholder="Message"  name="message"/>
              </div>
              <div class="btn-box">
                <button type="submit">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <!-- end info_section -->
  @endsection



  