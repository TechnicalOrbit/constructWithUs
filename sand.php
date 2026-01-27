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
  $subvalue = "Sand->(Balu)";
  require "common/subheader.php"; ?>

  <!-- Start main -->
  <main>
    <!--Start Question  -->
    <section class="container my-3">
      <div class="row">
        <div class="col-md-7 mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <img src="assest/img/sand1.png" alt="Why Choose" width="90%" class="img-fluid">
          </div>
        </div>
        <div class="col-md-5 mb-2">
          <h3>How the Right Sand Affects Construction Quality</h3>
          <p>Choosing the right sand is essential for achieving strong, durable, and high-quality construction. Good-quality sand improves the bonding between cement and aggregates, resulting in better strength and reduced chances of cracks and shrinkage. Proper sand selection also ensures smooth workability, making construction easier and more efficient.

            Using the right sand increases the lifespan of structures and enhances surface finishing in plastering and concrete works. It helps maintain uniformity in concrete mixes, reduces material wastage, and ensures long-term structural stability. Selecting the correct type of sand plays a crucial role in delivering safe, reliable, and long-lasting construction projects.
          </p>
        </div>

      </div>
    </section>
    <!-- End Question -->

    <section class="container my-4">
      <div class="text-center">
        <h3>Types of Sand, Sizes, and Their Uses</h3>
        <p>Sand is a crucial component of construction, providing strength, workability, and durability to concrete, plaster, and masonry work. Based on origin and texture, sand is classified into several types, each with specific sizes and uses.</p>
      </div>
      <!-- Start sand -->
      <section class="container my-3">
        <div class="experts-section my-2">
          <div class="owl-carousel experts-carousel">
            <div class="item">
              <div class="card">
                <div class="card-body bg-warning">
                  <h5 class="card-title">River Sand</h5>
                  <div><strong>Size:</strong>0.075 mm to 4.75 mm</div>
                  <p> <strong>Uses:</strong> Used in concrete, plastering, brickwork, and general construction.
                    Provides smooth finishing and better workability</p>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body bg-warning">
                  <h5 class="card-title">M-Sand (Manufactured Sand)</h5>
                  <div><strong>Size:</strong>0.075 mm to 4.75 mm</div>
                  <p> <strong>Uses:</strong> Used in concrete and masonry work.
                    Preferred in areas where river sand is scarce or expensive</p>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body bg-warning">
                  <h5 class="card-title">Pit Sand</h5>
                  <div><strong>Size:</strong>0.075 mm to 4.75 mm</div>
                  <p> <strong>Uses:</strong> Preferred for masonry work and plastering.
                    Provides high durability and strength in structures.</p>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="card">
                <div class="card-body bg-warning">
                  <h5 class="card-title">Utility Sand</h5>
                  <div><strong>Size: &nbsp;</strong>0.075 mm to 4.75 mm</div>
                  <p><strong>Uses:</strong>Used for backfilling, pipe bedding, and as a base for pavements.
                    Ideal for landscaping and general site work</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End sand -->
    </section>

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