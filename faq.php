<!DOCTYPE html>
<html lang="en">

<head>
  <!-- include head -->
  <?php require "common/head.php" ?>
</head>

<body>
  <!-- include header -->
  <?php require "common/header.php" ?>

  <!-- include subheader -->
  <?php
  $subvalue = "FAQs";
  require "common/subheader.php"; ?>

  <!-- Start main -->
  <main>
    <!-- Start FAQ -->
    <section class="container my-3">
      <h2 class="text-center">Fequntly Ask Question</h2>
      <div class="accordion" id="fqa">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Which TMT bar is best for house construction?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#fqa">
            <div class="accordion-body">
              <b>Fe 500 or Fe 500D</b> TMT bars are best for house construction as they provide good strength, durability, and safety.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What is the difference between OPC and PPC cement?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              OPC is mainly used for fast construction, while PPC is better for house construction because it gives long life and fewer cracks.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Which cement grade should I use for RCC work?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              OPC 43 or OPC 53 grade cement is commonly used for RCC work like columns, beams, and slabs.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              What size of bars are commonly used in buildings?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              8mm, 10mm, and 12mm bars are used for slabs, while 16mm and 20mm bars are used for beams and columns.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
              What is gitti (aggregate) used for?
            </button>
          </h2>
          <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              Gitti is used in concrete to provide strength and stability in slabs, beams, columns, roads, and foundations.
            </div>
          </div>
        </div>


        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
              What are the common sizes of crushed stone aggregate?
            </button>
          </h2>
          <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              Common sizes are 10mm, 20mm, and 40mm. Among these, 20mm is most widely used for RCC construction.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
              Which sand is best for construction?
            </button>
          </h2>
          <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              River sand or M-sand is best for construction work like concrete mixing, plastering, and masonry.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
              Do you provide genuine and branded materials?
            </button>
          </h2>
          <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              Yes, we deal only in genuine, quality-tested, and trusted brands to ensure safe and durable construction.
            </div>
          </div>
        </div>


        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
              Can I get material guidance before purchasing?
            </button>
          </h2>
          <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              Yes, our experienced team provides proper guidance to help you choose the right material for your project.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
              Do you supply materials for both small and large projects?
            </button>
          </h2>
          <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#fqa">
            <div class="accordion-body">
              Yes, we supply construction materials for small house projects as well as large commercial and industrial works.
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End FAQ -->
  </main>
  <!-- End main -->

  <!-- include footer -->
  <?php require "common/footer.php" ?>

  <!-- include foot -->
  <?php require "common/foot.php" ?>
</body>

</html>