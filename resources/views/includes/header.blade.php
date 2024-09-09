<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
  Go Source Placement Services</title>

  <!-- bootstrap core css -->
  {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom styles for this template -->
  {{-- <link href="css/style.css" rel="stylesheet" /> --}}
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  {{-- <link href="css/responsive.css" rel="stylesheet" /> --}}
  <link href={{ asset('css/responsive.css') }} rel="stylesheet" />
</head>
<header class="header_section">
  <div class="header_top">
    <div class="container-fluid">
      <div class="contact_link-container">
        <a href="https://maps.app.goo.gl/XnZXfhiLCLmkb7n16?g_st=ic" class="contact_link1">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
          22, 5th floor, Silk centre, Rehman Abad, office number 3,<br> Murree Rd, Rawalpindi
          </span>
        </a>
        <a href="https://wa.me/+923253802225"class="contact_link2">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : 051-6123130
          </span>
        </a>
        <a href="" class="contact_link3">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span style="color: white;">
          gosourceplacement@gmail.com
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="">
          <span>
         
              Go Source Placement Services
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            
           
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{route('tours')}}"> tours </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{route('carbooking')}}"> Car Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('hotel')}}">Hotel</a>
        </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('service')}}">Our Services </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}"> About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  </div>
</header>



