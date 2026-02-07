<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script src="assest/js/cursor.js">
</script>

<script src="assest/js/jQuery.js"></script>

<script>
  $(document).ready(function() {

    // Open modal on button click
    // $('#myModal').modal('show');

    $("#openModal").click(function() {
      $('#myModal').modal('show');
    })


    // Close modal click at inside modal button 
    $('#closeModal').on('click', function() {
      $('#myModal').modal('hide');
    });

    $('#enquiryForm').on('submit', function(e) {
      e.preventDefault();
      $('#myModal').modal('hide');
    });

  });
</script>



<script>
  function validateForm() {

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let mobile = document.getElementById("mobile").value.trim();
    let material = document.getElementById("option").value;

    console.log(material);

    // Name validation
    if (name == "") {
      alert("Name is required");
      return false;
    }

    // Email validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert("Enter valid email address");
      return false;
    }

    // Mobile validation (10 digits)
    let mobilePattern = /^[0-9]{10}$/;
    if (!mobilePattern.test(mobile)) {
      alert("Enter valid 10 digit mobile number");
      return false;
    }

    // Select validation
    if (material === "Select Material") {
      alert("Please select a Material");
      return false;
    }

    alert("Ordered successfully ✅");
    return true;
  }
</script>