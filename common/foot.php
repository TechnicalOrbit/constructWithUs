<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script src="assest/js/cursor.js">
</script>

<script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>

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