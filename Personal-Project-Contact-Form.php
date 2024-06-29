<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <title>Contact Us</title>
  <link href="Personal-Project-Contact-Form.css" type="text/css" rel="stylesheet">
  <link href="Personal-Project-LP-Header.css" type="text/css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;1,400&amp;family=Nunito:wght@300;700&amp;display=swap" rel="stylesheet">
</head>

<body>

<div class="grid">


<header class="sticky">
    <img class="logo" src="hourglass.png">
    <a href="Personal-Project-Landing-Page.html" class="title">Tempus</a>
</header>


<div class="wrapper">

 <img class="contactImage" src="undraw_contact_us_re_4qqt.svg">

 <div class="input">
   <div class="contactTitle">Contact Us</div>
   <?php include
    $i = 1;
    echo "the first 10 natural numbers are:";
    for($i = 1; $i <= 10; $i++) { 
    echo $i;}
    ?>
   <form class="contact">
     <label for="Name">Name<span>*</span></label>
     <input type="text" id="name">
     <label for="Email">Email<span>*</span><span id='emailAlert'>Please enter valid email address.</span></label>
     <input type="email" id="Email">
     <label for="Phone Number">Phone Number</label>
     <input type="text" id="phone">
     <label for="Message">Message<span>*</span></label>
     <textarea type="text" id="Message"></textarea>
     <input type="button" value="Submit" class="submit">
   </form>
 </div>

</div>

</div>



<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<!-- JavaScript -->
<script src="Personal-Project-Contact-Form.js"></script>
</body>
</html>
