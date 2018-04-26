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

      <li><a href="signup.php" > SIGN UP</a></li>
      <li><a href="login.php" > LOGIN</a></li>
    </ul>
  </div>
  </div>

</nav>

<div class="container-fluid" id="aboutus">
  <h3 style="text-align: center;padding-top: 100px;">

    <strong> 
      Weddi<data style="border-bottom: 4px solid #f96211;">ng Pl</data>anner

    </strong>

  </h3>
  <br>

   <div class="row">
      <div class="col-md-offset-1 col-md-5 text-justify">
       <h4 style="line-height: 1.6" > 

Catering to the major conventional belief that <strong style="color:#db4823">"Marriages are made in Heaven"</strong> and also considering Marriage to be the imperative moment in an individual's life, Anits Events is there to create that Paradise and make it the most unforgettable cherishing moment in the life of the Couple. Every ceremony within a Marriage whether it is Mehandi or else Sangeeth, Engagement or else the Reception has its own significance and these are fulfilled by following so many rituals based on the Religious Background Evolution. Anits Wedding planners possess an expertise team with idiosyncratic thoughts, which show differentiation from the First Ceremony to the other, or else from one Event to the other on a whole, until the completion of the Event. Our concepts used are surprising to our Clients which include the Wedding themes, Floral decors, Catering service and the Entertainment finally.


       </h4>
      </div>
      <div class="col-md-5">
        
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/weddingpic2.jpg" alt="BIRTHDAY" style="width:100%;height:430px;">
        
      </div>

      <div class="item">
        <img src="images/weddingpic3.jpg" alt="RECEPTION" style="width:100%;height:430px;">
        
      </div>
    
      <div class="item">
        <img src="images/weddingpic1.jpg" alt="WEDDING" style="width:100%;height:430px;">
        
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
      </div>
   </div>
</div>

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
