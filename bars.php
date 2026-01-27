<!DOCTYPE html>
<html lang="en">

<head>
  <!-- include head -->
  <link rel="stylesheet" href="assest/css/owlcarousel.css">
  <link rel="stylesheet" href="assest/css/owDefault.css">
  <?php require "common/head.php" ?>
</head>

<body>
  <!-- include header -->
  <?php require "common/header.php" ?>

  <!-- include subheader -->
  <?php
  $subvalue = "Bars->(Chhad)";
  require "common/subheader.php"; ?>

  <!-- Start main -->
  <main>
    <!--Start Question  -->
    <section class="container my-3">
      <div class="row">
        <div class="col-md-7 mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <img src="assest/img/bars1.png" alt="Why Choose" width="90%" class="img-fluid">
          </div>
        </div>
        <div class="col-md-5 mb-2">
          <h3>Benefits of Using the Right Quality Bars in Construction</h3>
          <p>Choosing the right steel bars is essential for ensuring the strength, safety, and durability of any construction project. High-quality bars provide better load-bearing capacity, helping structures withstand pressure, tension, and environmental stress over time. The correct grade of bars also improves bonding with concrete, reducing the risk of cracks and structural failure.
            Using the right bars enhances overall construction reliability and minimizes long-term maintenance costs. It ensures compliance with building standards, improves resistance to corrosion, and increases the lifespan of the structure. Proper bar selection ultimately plays a vital role in delivering safe, stable, and long-lasting buildings.</p>
        </div>

      </div>
    </section>
    <!-- End Question -->

    <!-- Start bars  -->
    <section class="container my-3">
      <h2 class="text-center">Types of Bars, Thickness & Their Uses</h2>
      <div class="experts-section my-2">
        <div class="owl-carousel experts-carousel">
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Fe 415 Bars</h5>
                <div><strong>Thickness: &nbsp;</strong>6 mm, 8 mm, 10 mm, 12 mm, 16 mm, 20 mm</div>
                <div> <strong>Uses: &nbsp;</strong>Used in small residential buildings, slabs, beams, staircases, lintels, and light RCC works where load requirements are low to moderate.</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Fe 550 Bars</h5>
                <div><strong>Thickness: &nbsp;</strong>10 mm, 12 mm, 16 mm, 20 mm, 25 mm, 32 mm</div>
                <div> <strong>Uses: &nbsp;</strong>Ideal for residential and commercial buildings, foundations, columns, bridges, flyovers, and general RCC structures.</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Fe 500D Bars</h5>
                <div><strong>Thickness: &nbsp;</strong>10mm, 12mm, 16mm, 20mm</div>
                <div> <strong>Uses: &nbsp;</strong>Commonly used in high-rise buildings, industrial structures, power plants, dams, and large infrastructure projects.</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Fe 600 Bars</h5>
                <div><strong>Thickness: &nbsp;</strong>12 mm, 16 mm, 20 mm, 25 mm, 32 mm, 40 mm</div>
                <div> <strong>Uses: &nbsp;</strong>Used in metro rail projects, highways, mega bridges, offshore structures, and earthquake-resistant constructions.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End bars  -->

    <section class="container my-4">
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center align-items-center">
            <img src="assest/img/bars2.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <h3>Some Addtional Information</h3>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Common TMT Bar Thickness and Typical Applications</h5>
              <p class="card-text">
              <ul>
                <li><b>6–8 mm:</b> Slabs, stirrups, rings, and secondary reinforcement</li>
                <li><b>10–12 mm:</b> Beams, slabs, residential columns</li>
                <li><b>16–20 mm:</b> Main columns, foundations, heavy beams</li>
                <li><b>25–40 mm:</b> Bridges, flyovers, dams, and heavy infrastructure</li>
              </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
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