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
<body>
    <header class="header is-general" id="header">
      <div class="container">
        <div class="header__wrap">
          <div class="mobile-menu">
            <ul class="mobile-menu">
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="index.html">Home</a></li>
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="products.php">Products</a></li>
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="contactus.php"> Contact Us</a></li>
              </ul>
          </div>
          <div class="hamburger" id="hamburger"><span class="hamburger__el"></span><span class="hamburger__el"></span><span class="hamburger__el"></span></div><a class="logo" href="index.html" title="Avitya Enterprises"><img src="partials/Avitya_Enterprises-icon24x24.png" alt="Avitya Enterprises"><span>Avitya Enterprises</span></a>
          <nav class="nav">
            <a href="index.html">Home</a>
            <a href="products.php">Products</a>
            <a href="contactus.php">Contact Us</a>
          </nav>
         </div>
      </div>
    </header> 
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")  {
    $myemail = "pajyatul@gmail.com";
    $email_address = $_POST["email"];
    $subject = "Let me know";
    $message = "Let me know as soon as this module is available.";
    $headers = $email_address;
    $to = $myemail;
    $email_body = "You have received a new message. \n"."Email: $email_address\n"."Subject: $subject \n"."Message: \n$message";
    mail($to,$subject,$email_body,$headers);
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Thank you for Signing Up..!&nbsp; </strong> We&apos;ll let you know as soon as this module is available.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
    }
    ?>   
      <div class="info-block" style="height: 100%;">
        <div class="container">
          <div class="info-block__top">
            <h2 class="info-block__title">This module is on the way..!</h2>
          </div>
          <div class="info-block__bottom">
            <p class="text-center"><center>Sign Up For Your Early Access Invite</center></p>
          </div>
  </div>
<div class="container" style="display: flex;flex-direction: column;align-items: center;padding-top: 0.5%">
<form style="display: flex; display: contents;" action="signup.php" method="POST">
<div class="mb-3 col-md-4" style="font-size: 17px;line-height: 28px;">
  <center><label for="exampleInputPassword1" class="form-label">Your Email</label></center>
  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
</div> 
<div class="mb-3 col-md-4" style="font-size: 10px;line-height: 17px; align-content: center;">
  <label for="exampleInputPassword1" class="form-label"></label>
<button type="submit" class="btn btn-primary col-md-12">Let me know</button>
</div>
</form>
</div>
</div>
</div> 
</main>	  
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