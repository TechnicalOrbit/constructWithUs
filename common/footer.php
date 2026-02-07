 <?php

  require "require/_dbconnect.php";



  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = testdata($_POST['name']);
    $email = testdata($_POST['email']);
    $mobile = testdata($_POST['mobile']);
    $material = testdata($_POST['material']);
    $msg = testdata($_POST['msg']);
    $sqlform = "INSERT INTO `order` ( `name`, `email`, `mobile`, `material`, `message`, `orderdate`) VALUES ( '$name', '$email', '$mobile', '$material', '$msg ', current_timestamp())";

    $resultform = $conn->query($sqlform);
    // if ($resultform) {
    //   echo "Form submit successful";
    // } else {
    //   echo "Form is not submit";
    // }

  }

  function testdata($data)
  {
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  ?>


 <!-- Start Footer -->
 <div class="footer">
   <footer class="container py-3 mt-2">
     <div class="row">
       <div class="col-md-3 my-2">
         <div class=" footheader">JNP AND COMPANY</div>
         <div class="d-flex justify-content-center align-items-center flex-column gap-2">
           <p>JNP AND COMPANY in Kushinagar is one of the leading businesses in the Cement Dealers. Also known for Cement Dealers, Building Material Dealers, Building Material Dealers-Capstone, Steel Building Material Dealers, Iron Building Material Dealers and much more.</p>
         </div>
       </div>
       <div class="col-md-3 my-2">
         <div class="footheader">Quick link</div>
         <div class="d-flex  flex-column gap-2">
           <ul class="nav">
             <li>
               <a href="index.php">Home</a>
             </li>
             <li>
               <a href="abour.php">About</a>
             </li>
             <li>
               <a href="Cement.php">Cement</a>
             </li>
             <li>
               <a href="bars.php">Bars(Chhad)</a>
             </li>
             <li>
               <a href="aggerate.php">Aggerate(Gitti)</a>
             </li>
             <li>
               <a href="sand.php">Sand(Balu)</a>
             </li>
             <li>
               <a href="faq.php">FAQs</a>
             </li>
           </ul>

         </div>
       </div>
       <div class="col-md-3 my-2">
         <div class=" footheader">Contact us</div>
         <div class="d-flext justify-content-center align-items-center gap-2 flex-column">
           <div class="d-flex  gap-2 my-3">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" style="width: 48px; fill:white;">
               <path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
             </svg>
             <div>
               Sonbarsa Pandeydih, Near Sonbarsa Pandeydih, Uttar Pradesh 274403
             </div>
           </div>
           <div class="d-flex  gap-2 my-3">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="phone">
               <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z" />
             </svg>
             <div>
               09889064087
             </div>
           </div>
           <div class="d-flex  gap-2 my-3">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="email">
               <path d="M125.4 128C91.5 128 64 155.5 64 189.4C64 190.3 64 191.1 64.1 192L64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192L575.9 192C575.9 191.1 576 190.3 576 189.4C576 155.5 548.5 128 514.6 128L125.4 128zM528 256.3L528 448C528 456.8 520.8 464 512 464L128 464C119.2 464 112 456.8 112 448L112 256.3L266.8 373.7C298.2 397.6 341.7 397.6 373.2 373.7L528 256.3zM112 189.4C112 182 118 176 125.4 176L514.6 176C522 176 528 182 528 189.4C528 193.6 526 197.6 522.7 200.1L344.2 335.5C329.9 346.3 310.1 346.3 295.8 335.5L117.3 200.1C114 197.6 112 193.6 112 189.4z" />
             </svg>
             <div>
               info@jnpandcompany.com
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3">
         <div class="d-flex  flex-wrap justify-content-center ">
           <img src="assest/img/gitti1.jpg" alt="" class="img-fluid" width="40%">
           <img src="assest/img/ambuja.jpg" alt="" class="img-fluid" width="40%">
           <img src="assest/img/16mm.jpg" alt="" class="img-fluid" width="40%">
           <img src="assest/img/sand.jpg" alt="" class="img-fluid" width="40%">
         </div>

       </div>
     </div>
     <p class="text-center my-2 ">Copyright © <?php echo Date("Y"); ?> - By JNP AND COMPANY</p>
   </footer>
 </div>
 <!-- End Footer -->





 <!-- Form modal -->
 <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="form-container">
         <div class="closeSection">

           <h2>Order Form</h2>
           <button id="closeModal">X</button>
         </div>

         <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post" >
           <div class="form-row">
             <div class="form-group">
               <label>Full Name</label>
               <input type="text" placeholder="Enter your name" name="name" required pattern="[a-zA-Z]+">
             </div>

             <div class="form-group">
               <label>Email address</label>
               <input type="email" placeholder="Enter email" name="email">
             </div>
           </div>

           <div class="form-row">
             <div class="form-group">
               <label>Mobile Number</label>
               <input type="tel" placeholder="Enter mobile number" name="mobile" required pattern="[0-9]{10}+" minlength="10" maxlength="10">
             </div>

             <div class="form-group">
               <label>Choose Material</label>
               <select name="material" required>
                 <option>Choose Material</option>
                 <option>Cement</option>
                 <option>Bars->(Chhad)</option>
                 <option>Sand->(Balu)</option>
                 <option>Aggerate->(Gitti)</option>
               </select>
             </div>
           </div>

           <div class="form-group full-width">
             <label>Message</label>
             <textarea rows="4" placeholder="Your message" name="msg"></textarea>
           </div>

           <div class="form-buttons">
             <button type="submit" class="submit-btn">Submit</button>
             <button type="reset" class="reset-btn">Reset</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>