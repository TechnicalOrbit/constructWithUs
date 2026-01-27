<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="assest/css/owlcarousel.css">
  <link rel="stylesheet" href="assest/css/owDefault.css">
  <!-- include head -->
  <?php require "common/head.php" ?>
</head>

<body>
  <!-- include header -->
  <?php require "common/header.php" ?>

  <!-- include subheader -->
  <?php
  $subvalue = "Aggerate->(Gitti)";
  require "common/subheader.php"; ?>

  <!-- Start main -->
  <main>
    <!--Start Question  -->
    <section class="container my-3">
      <div class="row">
        <div class="col-md-7 mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <img src="assest/img/aggerate1.png" alt="Why Choose" width="90%" class="img-fluid">
          </div>
        </div>
        <div class="col-md-5 mb-2">
          <h3>Importance of Selecting the Right Aggregate in Construction</h3>
          <p>Choosing the right aggregate is crucial for ensuring the strength, durability, and performance of concrete in construction projects. High-quality aggregates improve the load-bearing capacity of concrete and enhance its resistance to cracking, shrinkage, and environmental stress. The correct size and type of aggregate also help achieve proper bonding with cement, resulting in stronger and more stable structures.

            Using the right aggregate increases the overall lifespan of buildings and reduces maintenance costs over time. It improves workability during construction and ensures better finishing and structural reliability. Proper aggregate selection plays a vital role in delivering safe, durable, and long-lasting construction outcomes.
          </p>
        </div>

      </div>
    </section>
    <!-- End Question -->

    <!-- Start Aggregate -->
    <section class="container my-3">
      <h2 class="text-center"> Types of Aggregate->(Gitti)</h2>
      <div class="experts-section my-2">
        <div class="owl-carousel experts-carousel">
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">10 mm Crushed Stone</h5>
                <div><strong>Size:</strong>10mm</div>
                <p> <strong>Uses:</strong> Used in slabs, thin sections, precast elements, RCC works with dense reinforcement, and residential construction.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">20 mm Crushed Stone</h5>
                <div><strong>Size:</strong>20mm</div>
                <p> <strong>Uses:</strong> Most commonly used in general RCC construction such as beams, columns, footings, and foundations due to its balanced strength and workability.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">40 mm Crushed Stone</h5>
                <div><strong>Size:</strong>40mm</div>
                <p> <strong>Uses:</strong> Used in mass concrete works like dams, bridges, retaining walls, and heavy foundations where high strength and reduced cement consumption are required.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Fine Aggregate</h5>
                <div><strong>Size: &nbsp;</strong>Less than 4.75 mm</div>
                <p><strong>Uses:</strong>Used in plastering, masonry work, flooring, concrete finishing, and as a binding material in cement mortar and RCC works.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Graded Crushed Stone</h5>
                <div><strong>Size: &nbsp;</strong>10 mm, 20 mm, 40 mm</div>
                <p> <strong>Uses:</strong> Mix of different sizes, used for strong and durable concrete. and Ideal for high-strength concrete, highways, bridges, flyovers, industrial floors, and heavy-load structures.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Aggregate -->
  </main>
  <!-- End main -->

  <!-- include footer -->
  <?php require "common/footer.php" ?>

  <!-- include foot -->
  <?php require "common/foot.php" ?>

  <script src="assest/js/jQuery.js"></script>
  <script src="assest/js/owlCarousel.js"></script>

  <script>
    $(document).ready(function() {
      $('.experts-carousel').owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
      });
    });
  </script>
</body>

</html>