<!DOCTYPE html>
<html lang="en">

<head>
  <!-- include head -->
  <?php require "common/head.php" ?>
  <link rel="stylesheet" href="assest/css/owlcarousel.css">
  <link rel="stylesheet" href="assest/css/owDefault.css">
</head>

<body>
  <!-- include header -->
  <?php require "common/header.php" ?>

  <!-- include subheader -->
  <?php
  $subvalue = "Cement";
  require "common/subheader.php"; ?>

  <!-- Start main -->
  <main>

    <!--Start Question  -->
    <section class="container my-3">
      <div class="row">
        <div class="col-md-7 mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <img src="assest/img/whycement.png" alt="Why Choose" width="90%" class="img-fluid">
          </div>
        </div>
        <div class="col-md-5 mb-2">
          <h3>Why Choosing the Right Cement Matters</h3>
          <p>Choosing the right cement is very important for anyone building a house or any structure because it directly affects the strength, safety, and life of the construction. The correct cement helps the building handle load, weather changes, and daily use without cracks or damage. It also ensures better bonding, smooth finishing, and long-term durability, which reduces repair and maintenance costs in the future. Using the right cement means your home or project stays strong, safe, and reliable for years.</p>
        </div>

      </div>
    </section>
    <!-- End Question -->

    <!--Start Cement  -->
    <section class="cement container my-3">
      <h2 class="text-center"> Types of Cement</h2>
      <div class="experts-section my-2">
        <div class="owl-carousel experts-carousel">
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title">Ordinary Portland Cement (OPC)</h5>
                <p>Used for general construction like house walls, columns, beams, and slabs.</p>
                <a href="opc.php" class="btn " style="background-color: yellow;">Read More</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title"> Portland Pozzolana Cement (PPC)</h5>
                <p class="card-text">Best for house construction; gives better finish and fewer cracks.</p>
                <a href="ppc.php" class="btn " style="background-color: yellow;">Read More</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title"> Portland Slag Cement (PSC)</h5>
                <p class="card-text">Suitable for construction in damp, coastal, or water-exposed areas.</p>
                <a href="psc.php" class="btn " style="background-color: yellow;">Read More</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title"> Rapid Hardening Cement(RHC)</h5>
                <p class="card-text">Rapid Hardening Cement is used where fast construction is needed.
                </p>
                <a href="rhc.php" class="btn " style="background-color: yellow;">Read More</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="card-body bg-warning">
                <h5 class="card-title"> White Cement</h5>
                <p class="card-text">It is mainly used for tile fixing, wall putty, marble work, and smooth wall finishes, where a clean and attractive.</p>
                <a href="whitecement.php" class="btn " style="background-color: yellow;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Cement type  -->

    <!-- Start OPC Cement -->
    <!-- <section class="container my-3">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h1>Types of Cement </h1>

              <h2>1. OPC (Ordinary Portland Cement) </h2>
              <p>Ordinary Portland Cement (OPC) is the most commonly used cement in the construction industry. It is manufactured by finely grinding clinker with a small amount of gypsum, which helps control the setting time. OPC is known for its high strength, strong bonding, and reliable performance, making it a preferred choice for most construction works.</p>
              <p>This cement is mainly used in reinforced cement concrete (RCC) work such as slabs, beams, columns, and foundations. It is suitable for residential houses, commercial buildings, roads, bridges, and general construction projects. OPC gives good finishing and ensures durable and long-lasting structures when used correctly.</p>

              <p>
                OPC is available in different grades like OPC 33, OPC 43, and OPC 53, which indicate the compressive strength of cement after 28 days. Higher grades are used for heavy and load-bearing structures, while lower grades are suitable for light construction and finishing work.
              </p>
            </div>
            <div class="col-md-6">
              <div class="d-flex   flex-wrap ">
                <img src="assest/img/opc1.png" alt="" class="img-fluid" width="50%">
                <img src="assest/img/opc2.png" alt="" class="img-fluid" width="50%">
                <img src="assest/img/opc3.png" alt="" class="img-fluid" width="50%">
                <img src="assest/img/opc4.png" alt="" class="img-fluid" width="50%">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          

          <div class="row">
            <div class="col-md-12 mb-2">
              <img src="assest/img/opc5.png" alt="" class="img-fluid">
            </div>

            <div class="col-md-12 mb-2">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <h5 class="card-title">OPC 33 Grade</h5>
                      <div class="card-text">OPC 33 is a basic grade of cement that develops lower strength compared to higher grades.
                        It is mainly used for small construction works where heavy load is not required.</div>
                      <div>
                        <strong>Best for:</strong>
                        <ul>
                          <li>Plastering work</li>
                          <li>Masonry (brickwork)</li>
                          <li>Repair and finishing work</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <h5 class="card-title">OPC 43 Grade</h5>
                      <div class="card-text">OPC 43 offers medium to high strength and good durability.
                        It is widely used for residential and commercial construction.</div>
                      <div>
                        <strong>Best for:</strong>
                        <ul>
                          <li>House construction</li>
                          <li>RCC work (slabs, beams, columns)</li>
                          <li>Flooring and general structural work</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-1">
                    <div class="card-body">
                      <h5 class="card-title">OPC 53 Grade</h5>
                      <div class="card-text">OPC 53 is a high-strength cement that gains strength quickly.
                        It is used where early strength and heavy load capacity are required.</div>
                      <div>
                        <strong>Best for:</strong>
                        <ul>
                          <li>High-rise buildings</li>
                          <li>Bridges and flyovers</li>
                          <li>Roads, highways, and industrial structures</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>





          </div>
        </div>
      </div>
    </section> -->
    <!-- End OPC Cement -->

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