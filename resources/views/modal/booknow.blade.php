<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Message" name="message" />
            </div>
            <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
  document.getElementById('submitBtn').addEventListener('click', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Submit the form via AJAX
    fetch('{{ route('store') }}', {
      method: 'POST',
      body: new FormData(document.querySelector('form'))
    })
    .then(response => {
      if (response.ok) {
        // If form submission is successful, show the SweetAlert confirmation
        Swal.fire({
          title: 'Success!',
          text: 'Form submitted successfully.',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      } else {
        // If there's an error, handle it accordingly
        throw new Error('Form submission failed.');
      }
    })
    .catch(error => {
      // Handle errors, such as network issues
      console.error('Error:', error);
      Swal.fire({
        title: 'Error!',
        text: 'An error occurred while submitting the form. Please try again later.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    });
  });
</script>
