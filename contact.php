<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Managements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<style>
  * {
  border-radius: 0 !important;
  -moz-border-radius: 0 !important;
}
body{
  font-family:'Century Schoolbook';
}
.navbar{
background-color:#4c4747;
padding:13px;
font-family:'Century Schoolbook';

}
.navbar-header .navbar-brand{
  color:white;
  padding-left: 50px;
  font-size: 23px;

}
.navbar-nav li  a {
font-size:18px;
color:white;
}
.navbar-nav li a:hover{
  background-color:#4c4747 ;
border-top:1px solid white;
border-right:1px solid #f96211;
border-left:1px solid white;
border-bottom:1px solid white;


}

.dropdown:hover .dropdown-menu{
  display: block;
  background-color:#4c4747;
  color:white;

}
.dropdown-menu li a:hover{
  color:white;
}
.site-footer{
background-color:#4c4747;
color:white;
margin-top:30px;
padding-top:15px;

}
.bottom-footer{
border-top:1px solid #f96211;
margin-top:10px;
padding-top:15px;
padding-bottom: 8px;
}

.footer-nav {
text-align:left;
list-style:none;

}
.footer-nav li{
display:block;
}

.footer-nav a{
color:white;
}
.footer-nav a:hover{
color:#eff4f0;
text-decoration:none;
}
#contact{
    background-color:#f1f1f1;
    font-family: 'Roboto', sans-serif;
}

#contact .well{
    margin-top:30px;
    border-radius:0;
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}

@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    }
    
}
</style>
<body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>                        
      </button>
    <a class="navbar-brand" href="index.php"> <span style="color:#f96211">EVENT MANAGEMENT</span></a>
    </div>

     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="active" ><a href="index.php">HOME</a></li>
      <li ><a href="index.php">ABOUT US</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >EVENTS&nbsp;&nbsp;<span class="caret"></span></a>
        <ul class="dropdown-menu">
         <li><a href="wedding.php">WEDDING</a></li>
          <li><a href="engagement.php">ENGAGEMENT</a></li>
          <li><a href="birthday.php">BIRTHDAY</a></li>
          <li><a href="mehandi.php">MEHANDI</a></li>
          <li><a href="sangeeth.php">SANGEETH</a></li>
          <li><a href="corporate.php">CORPORATE</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >SERVICES&nbsp;&nbsp;<span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="decoration.php">DECORATION </a></li>
          <li><a href="cathering.php">CATHERING</a></li>
          <li><a href="photography.php">PHOTOGRAPHY</a></li>
          <li><a href="logistics.php">LOGISTICS</a></li>
        </ul>
      </li>
      <li class="active"><a href="contact.php">CONTACTUS</a></li>

      <li><a href="signup.php" >SIGN UP</a></li>
      <li><a href="login.php" > LOGIN</a></li>
    </ul>
  </div>
  </div>

</nav>



<section id="contact">
  <div class="container">
    <div class="well well-sm" style="padding-top: 30px;">
      <h3><strong>Contact Us</strong></h3>
    </div>
  
  <div class="row">
    <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15185.099882049855!2d83.4269892!3d17.91932445!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1518180463620" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in <data style="color: #f96211">Touch</data></strong></h4>
        <form action="mail.php" name="" method="">
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
          </div>
          <button class="btn btn-default btn-block" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
         <button class="btn btn-default btn-block" type="reset" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Reset
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<footer class="site-footer">
<div class="container-fluid">
  <div class="row">
     <div class="col-md-offset-1 col-md-4">
       <ul class="footer-nav">
         <h4 style="line-height: 1.6">
         <li><a href="index.php">HOME</a></li>
         <li><a href="index.php">ABOUT</a></li>
         <li><a href="wedding.php">WEDDING</a></li>
         <li><a href="engagement.php">ENGAGEMENT</a></li>
        </ul></h4>
     </div>
     <div class="col-md-4">
          <ul class="footer-nav">
            <h4 style="line-height: 1.6">
                <li><a href="birthday.php">BIRTHDAY</a></li>
               <li><a href="mehandi.php">MEHANDI</a></li>
               <li><a href="corporate.php">CORPORATE</a></li>
              <li><a href="sangeeth.php">SANGEETH</a></li></h4>
          </ul>
     </div>
      <div class="col-md-3">
          <ul class="footer-nav">
            <h4 style="line-height: 1.6">
            <li><a href="decoration.php">DECORATION </a></li>
            <li><a href="cathering.php">CATHERING</a></li>
            <li><a href="photography.php">PHOTOGRAPHY</a></li>
            <li><a href="logistics.php">LOGISTICS</a></li></h4>
          </ul>
     </div>
  </div>
  <!-- @Copyrights2018-->
  <div class="bottom-footer">
     <h4><span style="color:#f96211"> © 2018</span> Anits Event Management Services , All Rights Reserved.</h4>
  </div>
</div>
</footer>


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
  $('.nav li a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});
</script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>


</body>
</html>
