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
      Engage<data style="border-bottom: 4px solid #f96211;">ment Pl</data>anning

    </strong>

  </h3>
  <br>

   <div class="row">
      <div class="col-md-offset-1 col-md-5 text-justify">
       <h4 style="line-height: 1.7" > 

This ceremony is the most dynamic standpoint where <strong style="color: #f96211">two souls get united for a lifetime.</strong> There are Family people and relatives who witness this auspicious occasion. It is the step soon before marriage. Keeping this parameter in mind, we arrange the Engagement party and keep a check on the point to add more ecstasies through a Fabulous Decoration and a table full of Delicacies !! Additionally to these, we have some unique craft work which is channelized by our Skill power in a manner in which the Guests as well as the <strong style="color:#f96211">Relatives will recall the Wedding forever as the most nostalgic Marriage.</strong> 


       </h4>
      </div>
      <div class="col-md-offset-1 col-md-5">
        <img src="images/engagementpic1.jpg" height="350px">
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
