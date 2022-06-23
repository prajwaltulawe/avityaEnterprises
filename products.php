<!DOCTYPE html>
<html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="partials/css.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Avitya Enterprises</title>
	<link href="partials/style.css" rel="stylesheet"><script async="" src="partials/tag.js"></script><script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
     ym(68900323, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script></head>
<body><noscript><div><img src="https://mc.yandex.ru/watch/68900323" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <header class="header is-general" id="header">
      <div class="container">
        <div class="header__wrap">
          <div class="mobile-menu">
            <ul class="mobile-menu">
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="index.html">Home</a></li>
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="contactus.php">Contact us</a></li>
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="signup.php">Signup</a></li>
            </ul>
          </div>
          <div class="hamburger" id="hamburger"><span class="hamburger__el"></span><span class="hamburger__el"></span><span class="hamburger__el"></span></div><a class="logo" href="index.html" title="Avitya Enterprises"><img src="partials/Avitya_Enterprises-icon24x24.png" alt="Avitya Enterprises"><span>Avitya Enterprises</span></a>
          <nav class="nav">
            <a href="index.html">Home</a>
            <a href="contactus.php">Contact Us</a>
          </nav>
          <a class="button is-green" href="signup.php" rel="nofollow" title="Visit us"><span class="button__ico"></span><span class="button__text">Place Order</span></a>
        </div>
      </div>
    </header>  
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
  
    <div class="accordion" id="accordionExample">

    <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Basic Stationary
            </button>
          </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1001","#1002","#1003","#1004","#1005","#1006","#1007","#1008","#1009");
                         $products = array("","Eraser","Sharpner","Highlighter","ID Card Holder","Rubber Band","Rubber Band Big 100GMS","Scissior Big","Scissior Small","Soft Board Pin");
                         $brand = array("","Natraj","Luxar","Luxar","Local","Local","Local","Fisker","Fisker","Local");
                         $qty = array("","Each","Each","Each","Each","Each","Pkt.","Each","Each","Box");
                         $rate = array("","2.5","2.5","16","1.5","300","30","65","35","25");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</th>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>

         <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Blinder Clip
            </button>
          </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1010","#1011","#1011","#1012","#1013","#1014");
                         $products = array("","Blinder Clip 15mm","Blinder Clip 19mm","Blinder Clip 25mm","Blinder Clip 32mm","Blinder Clip 41mm","Blinder Clip 51mm");
                         $brand = array("","Bambilo","Bambilo","Bambilo","Bambilo","Bambilo","Bambilo");
                         $qty = array("","Box.","Box.","Box.","Box.","Box.","Box.",);
                         $rate = array("","25","30","35","42","60","85",);
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</th>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
 
         <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Books
            </button>
          </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1015","#1016","#1017");
                         $products = array("","Long Book Medium 2Q","Long Book 4Q","Motor Log Book");
                         $brand = array("","Prime","Prime","Prime");
                         $qty = array("","Each","Each","Each");
                         $rate = array("","40","120","80");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</th>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
       
         <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Book Binding
            </button>
          </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1018");
                         $products = array("","Book Binding 200 Pages-A3");
                         $brand = array("","Local");
                         $qty = array("","Each");
                         $rate = array("","350");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>

         <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Bubble Roll
            </button>
          </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1019");
                         $products = array("","Bubble Roll");
                         $brand = array("","Local");
                         $qty = array("","Roll");
                         $rate = array("","1200");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
 
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
              Calculator
            </button>
          </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1020","#1021");
                         $products = array("","Calculator CT512","Calculator MJ120");
                         $brand = array("","Citizen","Casio");
                         $qty = array("","Each","Each");
                         $rate = array("","160","310");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
 
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
              Card Board
            </button>
          </h2>
            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1022");
                         $products = array("","Card Board Sheet");
                         $brand = array("","Local");
                         $qty = array("","Each");
                         $rate = array("","15");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
 
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
              Case
            </button>
          </h2>
            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1023","#1024");
                         $products = array("","Document Case DC 200","DVD R Jewel Case");
                         $brand = array("","Local","Mouser");
                         $qty = array("","Each","Each");
                         $rate = array("","Call","Call");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
 
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
             Cheque Safe Sticker
            </button>
          </h2>
            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1025");
                         $products = array("","Cheque Safe Sticker");
                         $brand = array("","Big");
                         $qty = array("","Each");
                         $rate = array("","36");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
  
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
             Cutter
            </button>
          </h2>
            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1026","#1027","#1028");
                         $products = array("","Cutter Corporate","Cutter Medium","Cutter Small");
                         $brand = array("","Corporate","Local","Local");
                         $qty = array("","Each","Each","Each");
                         $rate = array("","18","10","5");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading11">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
             Electronices
            </button>
          </h2>
            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading12">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
             Batteries
            </button>
          </h2>
            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1029","#1030","#1031","#1032","#1033");
                         $products = array("","Dura Cell Small","Dura Cell Big","Dura Cell 9V","Nippo Cell","Nippo Cell");
                         $brand = array("","Duracell","Duracell","Duracell","Nippo","Nippo");
                         $qty = array("","Each","Each","Each","Each","Each");
                         $rate = array("","38","38","350","10","10");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
               </div>
             </div>
          <div class="accordion-item">
          <h2 class="accordion-header" id="heading13">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
             CD/ DVD
            </button>
          </h2>
            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1034","#1035","#1036","#1037");
                         $products = array("","CD Bag For 240 CD's","CD Cover","CD -HP","DVD Spindal");
                         $brand = array("","Local","Local","HP","HP");
                         $qty = array("","Each","Each","Each","Each","Each");
                         $rate = array("","775","5","20","Call");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
               </div>
             </div>

          <div class="accordion-item">
          <h2 class="accordion-header" id="heading14">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
             Pendrive
            </button>
          </h2>
            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1038");
                         $products = array("","Pendrive");
                         $brand = array("","");
                         $qty = array("","Each");
                         $rate = array("","Call");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
               </div>
             </div>
         
          </div>            
        </div>
      </div>
   
      <div class="accordion-item">
          <h2 class="accordion-header" id="heading15">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
             Envelope
            </button>
          </h2>
            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1039");
                         $products = array("","Cloth Envelope");
                         $brand = array("","Local");
                         $qty = array("","Each");
                         $rate = array("","4");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading16">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
             File
            </button>
          </h2>
            <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1040","#1041","#1042","#1043","#1045","#1046","#1047","#1048","#1049","#1050","#1051","#1052","#1053","#1054","#1054","#1055");
                         $products = array("","2-D Ring Binding File Size A4","Box File SADA","Box File China Clip","Box File Lamination","Box File","Prime Box File","Cobra File","Ring Files","Plastic File Folder 1 To 30","Report File","Patti File","File Divider","Patti File A/4 Thick","Spring File-1 Thick","Spring File-2 Oswal");
                         $brand = array("","Local","Local","Local","Local","Sudarshan","SPS","Local","SPS","SPS","Local","Local","Local","Corporate","Local","Local");
                         $qty = array("","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each","Each");
                         $rate = array("","70","35","45","65","90","65","45","85","95","25","15","70","18","15","12");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
            </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading17">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
             Folder
            </button>
          </h2>
            <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1055","#1056","#1057","#1058","#1059","#1060","#1061");
                         $products = array("","Display Folder A4 20 Pkt.","Display Folder A4 40 Pkt.","File Folder 60 Pkt. A4","Solo Folder File","Folder Plastics L Type Thick","Folder Punch A4","Patti Folder");
                         $brand = array("","Corporate","Corporate","Corporate","EX-901","Corporate","Local","Corporate");
                         $qty = array("","Nos.","Nos.","Each","Each","Each","Each","Each");
                         $rate = array("","85","120","180","150","9","4","15");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading18">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
             Glue Stick
            </button>
          </h2>
            <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1062","#1063");
                         $products = array("","Glue Stick (8 grams)","Glue Stick (15 grams)");
                         $brand = array("","Corporate","Corporate");
                         $qty = array("","Each","Each");
                         $rate = array("","25","35");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading19">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
             Index Seprator
            </button>
          </h2>
            <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1064","#1065","#1066");
                         $products = array("","Plastic Index Seprator 1-5","Plastic Index Seprator 1-15","Plastic Index Seprator 1-20");
                         $brand = array("","SPS","SPS","SPS");
                         $qty = array("","Set","Set","Set");
                         $rate = array("","40","50","60");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading20">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
             Markers
            </button>
          </h2>
            <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1067","#1068","#1069","#1070","#1071","#1072","#1073");
                         $products = array("","Marker White Board","OHP Marker","OHO Marker Set","Permanent Marker","Permanent Marker","Paint Marker","Paint Marker");
                         $brand = array("","Camel","Luxar","Luxar","Luxar","Camlin","Office Mat","Camlin");
                         $qty = array("","Each","Each","Set","Nos.","Nos.","Nos.","Nos.");
                         $rate = array("","23","17","90","17","16","43","48");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
   
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading21">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
             Pad
            </button>
          </h2>
            <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1074","#1075","#1076","#1077","#1078","#1079","#1080","#1081");
                         $products = array("","Writing Pad","Chit Pad","Conference Pad","Spiral Pad 7","Spiral Pad Medium (A5)","Spiral Pad Small A(6)","Stamp Pad Ink","Stamp Pad Medium");
                         $brand = array("","Local","Color","Prime","Prime","Corporate","Corporate","Camel","Camel");
                         $qty = array("","Each","Each","Each","Set","Nos.","Nos.","Nos.","Nos.");
                         $rate = array("","65","40","60","28","32","25","20","40");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
             </div>
         </div>
                 
      <div class="accordion-item">
          <h2 class="accordion-header" id="heading22">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
              Paper
            </button>
          </h2>
            <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                         $product_code = array("","#1082","#1083","#1084","#1085","#1086","#1087","#1088","#1089","#1090","#1091","#1092","#1093","#1094","#1095");
                         $products = array("","A/4 Image Paper 70gsm", "A/3 Image Paper", "A/4 Copy Power Paper 75gsm", "A/4 TNPL Paper 70gsm","C Rulled Ledger","Bond Paper Rim (70GSM)","Chart Paper Black","Flip Chart Paper","Ledger Paper Sheet","Legal Paper Rim","Plotter Paper 24x50MTR","Plotter Paper 36x50MTR","Plotter Paper 24x150MTR","Plotter Paper 36x50MTR");
                         $brand = array("","Bilt","Bilt","Bilt","Bilt","Prime","Royal","Reynold","Local","Local","Local","NASA","NASA","NASA","NASA");
                         $qty = array("","Pkt.","Pkt.","Pkt.","Pkt.","Each","Rim","Each","Each","Rim","Rim","Nos.","Nos.","Nos.","Nos.");
                         $rate = array("","160","340","185","160","150","350","8","280","380","240","390","550","1050","1350");
                        for ($i = 1; $i<count($products); $i++ ) {
                         echo '<tr>
                              <th scope="row">'.$i.'</th>
                              <th scope="row">'.$product_code[$i].'</td>
                              <td>'.$products[$i].'</td>
                              <td>'.$brand[$i].'</td>
                              <td>'.$qty[$i].'</td>
                              <td>'.$rate[$i].'</td>
                        </tr>';
                         }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading23">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
              Pen
            </button>
          </h2>
            <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1096","#1097","#1098","#1099","#1100","#1101","#1102");
                          $products = array("","Cello Gel Pen","Cello Gel Pen Sprint","Gel Pen Click","Laxi Blue Pen", "Reynold Pen 040","Reynold Pen 045","Sketch Pen Set");
                          $brand = array("","Cello","Cello","Linc","Lexi","Reynold","Reynold","Pik");
                          $qty = array("","Each","Each","Each","Each","Each","Each","Set");
                          $rate = array("","10","14","As Per Sample","5","5","6.5","20");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading24">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
              Pencil
            </button>
          </h2>
            <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1103","#1104","#1105");
                          $products = array("","Natraj Pencil","Pencil HB","Camlin Lead Pencil");
                          $brand = array("","Natraj","Local","Camlin");
                          $qty = array("","Each","Each","Each");
                          $rate = array("","4","3.5","7");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading25">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
              Post IT
            </button>
          </h2>
            <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1106","#1107","#1108","#1109","#1110","#1111","#1112");
                          $products = array("","Post IT 1.5x2","Post IT 2x3","Post IT 3 Pulls","Post IT 3x3","Post IT 3x5","Post IT 4x3","Post IT Flags 5 Pulls");
                          $brand = array("","Claro","Claro","Claro","Claro","Claro","Claro","Claro");
                          $qty = array("","Each","Each","Each","Each","Each","Each","Each");
                          $rate = array("","25","35","45","35","45","40","42");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading26">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
              Punch Machine
            </button>
          </h2>
            <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1113","#1114","#1115","#1116","#1117");
                          $products = array("","Punch Machine DP500","Punch Machine DP800","Punch 280","Punching Machine HDP2320","Punch M/C3 Holes");
                          $brand = array("","Kangaroo","Kangaroo","Kangaroo","Kangaroo","Kangaroo");
                          $qty = array("","Each","Each","Each","Each","Each");
                          $rate = array("","130","1200","70","2020","250");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading27">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
              Register
            </button>
          </h2>
            <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1118","#1119","#1120","#1121","#1122","#1123");
                          $products = array("","Register 17 27 1Q","Register 17 27 2Q","Register 17 27 3Q","Muster Register 2Q","Register 2Q","Matrix Dairy");
                          $brand = array("","Prime","Prime","Prime","Local","Prime","BiltMatrix");
                          $qty = array("","Each","Each","Each","Each","Each","Nos.");
                          $rate = array("","30","65","90","120","300","145");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading28">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
              Scale
            </button>
          </h2>
            <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1124","#1125");
                          $products = array("","Camlin Scale Small","Scale Plastic");
                          $brand = array("","Camel","Camel");
                          $qty = array("","Each","Each");
                          $rate = array("","5","15");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading29">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
              Sheet
            </button>
          </h2>
            <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1126","#1127","#1128");
                          $products = array("","Protector Sheet A/4 Thick","Tracing Sheet A/4","Tracing Sheet A/3");
                          $brand = array("","Corporate","Local","Local");
                          $qty = array("","Set","Pkt.","Pkt.");
                          $rate = array("","3.5","520","820");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading30">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
              Stepler
            </button>
          </h2>
            <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1129","#1130","#1131","#1132","#1133");
                          $products = array("","Stepler Big HP-45","Stepler K-10","Stepler Pin 24/6","Stepler Pin-10","Stepler Remover");
                          $brand = array("","Kangaroo","Kangaroo","Kangaroo","Kangaroo","Kangaroo");
                          $qty = array("","Nos.","Each","Box","Box","Each");
                          $rate = array("","190","45","250","130","170");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading31">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
              Tape
            </button>
          </h2>
            <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1134","#1135","#1136","#1137","#1138","#1139","#1140","#1141","#1142","#1143","#1144","#1145");
                          $products = array("","Both Side Tape 2 yard 1 inch","Both Side Tape 2 inch","Brown Tape 2","Brown Tape 2 Full Size","Cello Tape 0.5","Cello Tape 2","Cello Tape Small","Cello Tape Small 0.5","Cello Tape -2-40 Mtr","Masking Tape 1 inch","Floore Marking Tape","Tape Dispenser 1 inch");
                          $brand = array("","Local","Local","Wonder","Wonder","Wonder","Wonder","Local","Wonder","Wonder","Local","Local","Prime");
                          $qty = array("","Each","Each","Each","Each","Each","Each","Nos.","Each","Each","Each","Each","Each");
                          $rate = array("","25","40","25","30","12","22","10","4","25","30","160","110");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
               
         <div class="accordion-item">
          <h2 class="accordion-header" id="heading32">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
              Other
            </button>
          </h2>
            <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <table class="table">
                    <thead class="table-light">
                        <tr>
                             <th scope="col">Sr. No.</th>
                             <th scope="col">Product Code</th>
                             <th scope="col">Product List</th>
                             <th scope="col">Brand</th>
                             <th scope="col">Qty.</th>
                             <th scope="col">Rate (Rs)</th>
                         </tr>
                    </thead>
                     <tbody>
                         <?php
                          $product_code = array("","#1146","#1147","#1148","#1149","#1150");
                          $products = array("","Fax Roll-18 MTR","Spike Guard","Magnetic Button","Spring Seprator","Tag Bundle 1 inch");
                          $brand = array("","Mitsubishi","Local","Bambilo","Local","Local");
                          $qty = array("","Each","Each","Each","Each","Pkt.");
                          $rate = array("","45","As Per Sample","70","9","75");
                          for ($i = 1; $i<count($products); $i++ ) {
                          echo '<tr>
                                <th scope="row">'.$i.'</th>
                                <th scope="row">'.$product_code[$i].'</td>
                                <td>'.$products[$i].'</td>
                                <td>'.$brand[$i].'</td>
                                <td>'.$qty[$i].'</td>
                                <td>'.$rate[$i].'</td>
                          </tr>';
                          }
                         ?>
                     </tbody>
                 </table>
               </div>
           </div>
         </div>
        
        
    </div>  
</div>	
    <footer class="footer">
      <div class="container">
        <div class="footer__wrap"><span class="footer__title">Disclaimer</span>
              <center><p>This is an unofficial fan website created for general information/educational purpose only. Any context found in this website is our personal opinions and do not purport to reflect the opinions or views of its representatives. All other trademarks are the property of their respective owners.</p></center>
        </div>
      </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script type="text/javascript" src="partials/commons.js"></script><script type="text/javascript" src="partials/index.js"></script>
<iframe name="ym-native-frame" title="ym-native-frame" style="opacity: 0 !important; width: 0px !important; height: 0px !important; position: absolute !important; left: 100% !important; bottom: 100% !important; border: 0px none !important;" aria-hidden="true" frameborder="0"></iframe></body></html>