<!DOCTYPE html>
<html lang="en">

<head>
  <!-- include head -->
  <?php require "common/head.php" ?>

  <style>
    .box {
      background-color: #262222;
      text-align: center;
      height: 130px;
      transition: all .5s ease;
      margin-bottom: 10px;
      padding: 10px;
    }

    .box:hover {
      background-color: black;
      transform: scale(0.9);

    }





    .box>div {
      padding: 20px 0px;
    }

    .box * {
      color: white;
    }

    /* end box */



    /* Enquiry Form Styling */
    .col-md-6 h2 {
      margin-bottom: 10px;
      font-weight: 700;
    }

    .col-md-6 form label {
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
      color: #262525;
    }

    .col-md-6 form input,
    .col-md-6 form select,
    .col-md-6 form textarea {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 0;
      font-size: 14px;
      outline: none;
      background: #fff;
    }

    .col-md-6 form textarea {
      resize: none;
    }

    .col-md-6 form input:focus,
    .col-md-6 form select:focus,
    .col-md-6 form textarea:focus {
      border-color: #000;
    }

    .col-md-6 .row>div {
      margin-bottom: 5px;
    }

    /* Optional: Submit Button (agar baad me add karo) */
    .col-md-6 form button {
      padding: 12px 30px;
      background-color: #f7db08;
      color: #000000;
      font-weight: 600;
      border: none;
      border-radius: 0;
      font-size: 15px;
      cursor: pointer;
    }
  </style>

</head>

<body>
  <!-- include header -->
  <?php require "common/header.php" ?>

  <!-- include subheader -->
  <?php
  $subvalue = "Contact";
  require "common/subheader.php"; ?>

  <!-- Start main -->
  <main>


    <!--Start Contact  -->

    <section class="container my-3">

      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="d-flex flex-column ">
              <strong>Address</strong>
              <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 40px; fill:white;">
                  <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
                </svg>
                <div>
                  Sonbarsa Pandeydih, Near Sonbarsa Pandeydih, Uttar Pradesh 274403
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="d-flex flex-column ">
              <strong>Phone</strong>
              <div class="d-flex justify-content-center align-items-center gap-2  mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="phone">
                  <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z" />
                </svg>
                <div>
                  09889064087
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="d-flex flex-column ">
              <strong>Email Address</strong>
              <div class="d-flex justify-content-center align-items-center gap-2  mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="email">
                  <path d="M125.4 128C91.5 128 64 155.5 64 189.4C64 190.3 64 191.1 64.1 192L64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192L575.9 192C575.9 191.1 576 190.3 576 189.4C576 155.5 548.5 128 514.6 128L125.4 128zM528 256.3L528 448C528 456.8 520.8 464 512 464L128 464C119.2 464 112 456.8 112 448L112 256.3L266.8 373.7C298.2 397.6 341.7 397.6 373.2 373.7L528 256.3zM112 189.4C112 182 118 176 125.4 176L514.6 176C522 176 528 182 528 189.4C528 193.6 526 197.6 522.7 200.1L344.2 335.5C329.9 346.3 310.1 346.3 295.8 335.5L117.3 200.1C114 197.6 112 193.6 112 189.4z" />
                </svg>
                <div>
                  info@jnpandcompany.com
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- End Contact -->

    <!-- Start Enquiry Form -->

    <section class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <h2>Order Now</h2>
          <form action="">
            <div class="row">
              <div class="col-md-12">
                <label>Name:
                  <input type="text">
                </label>
              </div>
              <div class="col-md-6">
                <label>
                  Email:
                  <input type="email">
                </label>
              </div>
              <div class="col-md-6">
                <label>
                  Phone:
                  <input type="text">
                </label>
              </div>
              <div class="col-md-12">
                <label>Choose Material
                  <select>
                    <option value="Select">Select Material</option>
                    <option value="Bars(chhad)">Bars(chhad)</option>
                    <option value="Cement">Cement</option>
                    <option value="Aggerate(Gitti)">Aggerate(Gitti)</option>
                    <option value="Sand(Balu)">Sand(Balu)</option>
                  </select>
                </label>
              </div>
              <div class="col-md-12">
                <label>
                  Query
                  <textarea rows="5">Write here...</textarea>
                </label>
              </div>
              <div class="col-md-3">
                <button type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <img src="assest/img/contact1.png" alt="" class="img-fluid" width="100%">
        </div>
      </div>
    </section>
    <!-- Start Enquiry From -->

    <!-- Start Map -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10670.160786289156!2d83.87910645!3d26.74738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1769070886045!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <!-- End Map -->

  </main>
  <!-- End main -->

  <!-- include footer -->
  <?php require "common/footer.php" ?>

  <!-- include foot -->
  <?php require "common/foot.php" ?>
</body>

</html>