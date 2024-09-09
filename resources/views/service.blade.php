

@extends('layouts.master')

@section('content')
  <!-- service section -->

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