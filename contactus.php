<!DOCTYPE html>
<html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="partials/css.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Avitya Enterprises</title>
	<meta name="description" content="uTorrent Free Download for Windows 10,7,8/8.1/Vista (64/32 bit). Compact BitTorrent free client with expansive capabilities.">
	<meta name="keywords" content="utorrent,utorrent download,utorrent free download,utorrent for windows,utorrent for windows 10">
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
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="products.php">Products</a></li>
              <li class="mobile-menu__el"><a class="mobile-menu__link" href="signup.php">Signup</a></li>
            </ul>
          </div>
          <div class="hamburger" id="hamburger"><span class="hamburger__el"></span><span class="hamburger__el"></span><span class="hamburger__el"></span></div><a class="logo" href="index.html" title="Avitya Enterprises"><img src="partials/Avitya_Enterprises-icon24x24.png" alt="Avitya Enterprises"><span>Avitya Enterprises</span></a>
          <nav class="nav">
            <a href="index.html">Home</a>
            <a href="products.php">Products</a>
          </nav>
        </div>
      </div>
    </header>
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST")  {
$myemail = "tulaveprajwal143@gmail.com";
$name = $_POST["name"];
$email_address = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$to = $myemail;
$email_body = "You have received a new message. "."Here are the details:\n Name: $name \n"."Email: $email_address\n"."Subject:\n Subject: $subject \n"."Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$subject,$email_body,$headers);
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Oops..!&nbsp;It seems that your message wasn&apos;t sent. </strong> Please <a href="mailto: avitya.enterprises@gmail.com" class="alert-link"> click here </a> to manually send an email.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
    
        <div class="container" style="padding-top: 3%;">
            <h3 class="info-block__title" ><center>Leave a Message</center></h3>
          </div>
      </div>
<div class="container" style="display: flex;flex-direction: column;align-items: center;">
  <form style="display: flex; display: contents;" action="contactus.php" method="POST">
    <div class="mb-3 col-md-4" style="font-size: 17px;line-height: 28px;">
      <label for="exampleInputEmail1" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3 col-md-4" style="font-size: 17px;line-height: 28px;">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
    </div> 
    <div class="mb-3 col-md-4" style="font-size: 17px;line-height: 28px;">
      <label for="exampleInputEmail1" class="form-label">Subject</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" required>
    </div> 
    <div class="mb-3 col-md-4" style="font-size: 17px;line-height: 28px;">
  <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="message" required></textarea>
</div>
<div class="mb-3 col-md-4" style="font-size: 10px;line-height: 17px; align-content: center;">
      <label for="exampleInputPassword1" class="form-label"></label>
  <button type="submit" class="btn btn-primary col-md-12">Send</button>
  </div>
  </form>
    </div>
    </main>	
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script type="text/javascript" src="partials/commons.js"></script><script type="text/javascript" src="partials/index.js"></script>
<iframe name="ym-native-frame" title="ym-native-frame" style="opacity: 0 !important; width: 0px !important; height: 0px !important; position: absolute !important; left: 100% !important; bottom: 100% !important; border: 0px none !important;" aria-hidden="true" frameborder="0"></iframe></body></html>