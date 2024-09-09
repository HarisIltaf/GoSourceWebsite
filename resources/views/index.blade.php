


@extends('layouts.master')

@section('content')



  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/bg.jpg" alt="">
      </div>
    </div>

   
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-7">
                  <div class="detail-box">
                    <h1>
                      Hire Skilled and Labour<br>
                      From Pakistan
                      {{-- "Unlock boundless exploration<br> with HSL Travel & Tour,<br> where every journey is an unforgettable experience!" --}}
                  </h1>
                  
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores nisi labore, laudantium quaerat libero tenetur dolor culpa doloribus omnis rerum blanditiis numquam qui quo, corporis, perspiciatis tempore totam fuga.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1"> Read more </a>
                      <a href="" class="btn-2">Get A Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-7">
                  <div class="detail-box">
                    <h1>
                    Best Overseas Employment & Recruitment <br>
                    Agency in Pakistan
                    </h1>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quae ad, quis ducimus eveniet fugit qui nam tempore quisquam architecto facilis deleniti voluptas eaque aspernatur.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1"> Read more </a>
                      <a href="" class="btn-2">Get A Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>

    <a href="" id="airticket" ></a>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <!-- <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Air tickets
              </h6>
              <p>
                "Book your flight tickets hassle-free with us!"
              </p>
              <a href="" id="airticket" >
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Car Booking
              </h6>
              <p>
                "Secure your car rental effortlessly with us!".
              </p>
              <a href="{{route('carbooking')}}">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Hotel Booking
              </h6>
              <p>
                "Book your hotel stay hassle-free today!".
              </p>
              <a href="{{route('hotel')}}">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/s4.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Tours
              </h6>
              <p>
                "Embark on unforgettable adventures with ease!".
              </p>
              <a href="{{route('tours')}}">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/t1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Global Bulk Recruitment Servcie
              </h6>
              <p>
              
              Overseas Manpower Recruitment Services For Global Organizations
              </p>
              <a href="" class="airticket">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/t2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Permanent & Contractual Placement
              </h6>
              <p>
              
                  Hire Skilled & Labor Staff on Permanent & Contractual Basis


              </p>
              <!-- <a href="{{route('carbooking')}}"> -->
              <a href="" class="airticket">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/t2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Executive Search
              </h6>
              <p>
              
              Overseas Manpower Recruitment Services For Global Organizations
              </p>
              <!-- <a href="{{route('hotel')}}"> -->
              <a href="" class="airticket" >
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/t1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Returned Skilled Worker
              </h6>
              <p>
              
              Hire Returned Pakistani Skilled Worker For Your Organization
              </p>
              <!-- <a href="{{route('tours')}}"> -->
              <a href="" class="airticket" >
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about-img.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-lg-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
            
            Go Source Placement Services is a full-service recruiting company that provides a wide range of recruiting services and HR consultancy. We handle every overseas campaign with the same attention regardless of the industry or size of the client. We are capable of handling all kinds of staffing and placement projects. Our Services includes Global Recruitment Service, Professional Work Permit Visa Assistance, Document Attestation, Legal Compliance and HRM Solutions.
            </p>
            <div class="btn-box">
              <a href="{{route('about')}}">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- country section -->

  <section class="country_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        Major Industries We Recruit For Permanent and Contractual Placement Services
        </h2>
        <p>
        We specialize in finding top talent for positions ranging from entry-level coordinators to C-level executives through our Permanent and Contractual Placement Services. Understanding that each industry has its own set of recruiting challenges, we don’t believe in a one-size-fits-all solution. Instead, we craft tailored recruitment strategies that align with the specific needs of your sector. Whether you’re in need of permanent staff or contract workers, our seasoned recruiters are here to provide expert placement services across a variety of leading industries.
         
        </p>
      </div>
      
      <div class="row">
        <div class="col-md-4">
          <a  class="box">
            <img src="images/eng.jpg" alt=""height="269px">
            <div class="detail-box">
              <h3>
              Engineers
              
              </h3>
            </div>
          </a>
        </div>
        
        <div class="col-md-4">
          <a  class="box">
            <img src="images/cons.jpg" alt=""height="269px">
            <div class="detail-box">
              <h3>
              Construction Industry
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a  class="box">
            <img src="images/oil.jpg" alt=""height="269px">
            <div class="detail-box">
              <h3>
              Oil & Gas Recruitment
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a  class="box">
            <img src="images/d1.jpg" alt=""height="269px">
            <div class="detail-box">
              <h3>
              Healthcare & Pharmacy
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a class="box">
            <img src="images/d3.jpg" alt=""height="269px">
            <div class="detail-box">
              <h3>
              Naval Recruitment
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a  class="box">
            <img src="images/d2.png" alt="" height="269px">
            <div class="detail-box">
              <h3>
              Airline & Aviation
              </h3>
            </div>
          </a>
        </div>
      {{-- new items add --}}
    <!-- <div class="col-md-4">
      <a href="{{route('tours.skardu')}}" class="box">
        <img src="images/c1.jpg" alt=""height="269px">
        <div class="detail-box">
          <h3>
           Skardu
          </h3>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="{{route('tours.kumrat')}}" class="box">
        <img src="images/kumrat.jpg" alt=""height="269px">
        <div class="detail-box">
          <h3>
            Kumrat Valley
          </h3>
        </div>
      </a>
    </div> -->
   
  </div>
  </section>

  <!-- end country section -->

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

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Client
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client-1.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Mark Evans
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client-2.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Anthony White
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client-1.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Mark Evans
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client-2.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Anthony White
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->

  <!-- end info_section -->



  @endsection
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
        // Function to handle button click
        $('.airticket').click(function(event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            
            // Make an AJAX request to the controller method
            $.ajax({
                url: "{{ route('airticket') }}",
                type: "GET",
                success: function(response) {
                    if (response.showPopup) {
                        // Show the SweetAlert popup
                        Swal.fire({
                            title: 'Not Available',
                            text: response.message,
                            icon: 'info',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors if needed
                    console.error(error);
                }
            });
        });
    });
  </script>