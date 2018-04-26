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
      Cath<data style="border-bottom: 4px solid #f96211;">ering Ser</data>vice

    </strong>

  </h3>
  <br>

   <div class="row">

<div class="col-md-4" >
<h3> <data style="color: #f96211">Veg</data> Menu</h3>

  <img src="images/catheringvegmenu.jpg" style="width:400px;height:300px"></div>
    <div class="col-md-4" >
      <h3><data style="color: #f96211">Non Veg </data>Menu</h3>
      <img src="images/catheringnonvegmenu.jpg" style="width:400px;height:300px"></div>

    <div class="col-md-4" >
<h3><data style="color: #f96211">All Items</data> Menu</h3>
      <img src="images/catheringallitemsmenu.jpg" style="width:400px;height:300px"></div>


   </div>
<div class="row" >
  <h3 style="text-align: center;padding-top: 60px;color: #f96211">DINING STYLES -------------------------------------------------</h3>
       <div class="col-md-offset-1 col-md-3">
        <h3 style="font-size: 19px;color: #f96211">INDIAN STYLE BANQUETS:</h3>
        <h4>
          This type of Banquet includes Dining which is arranged on long tables with classic decor ations where all our Guests can be made to sit comfortably and have a Grand Dining. It is no less than a style in which you can behold all your Near and Dear ones having the Delicacies from one corner to the other while also demanding your Choice of Food to the Waiters !!
        </h4>
      </div>
      <div class="col-md-2">
        <img src="images/catheringindianstyle.jpg">
      </div>
      <div class=" col-md-3">
        <h3 style="font-size: 19px;color: #f96211">BANQUET STYLE:-</h3>
        <h4>
         Instead of being in the shape of long tables, in this type of panache, the arrangement includes Round tables which are often decorated with Florals and Satin Fabrics of plethora shades. It is all together another experience of feasting in the closet. The sense of togetherness in such an arrangement is augmented with more and more people eating and interacting within a more intimate Space.  
        </h4>
      </div>
      <div class="col-md-2">
        <img src="images/catheringbanquetstyle.jpg">
      </div>
    </div>
      <div class="row" style="padding-top: 25px">
      <div class="col-md-offset-1 col-md-3" >
        <h3 style="font-size: 19px;color: #f96211">BUFFET SERVICE:-</h3>
        <h4>
         Food courts are a must in such a Service wherein the tables will be surrounding the plenary Hall space along the three walls mandatorily. These tables might be covered with Velvety or else Satin table covers and decorated at the edges. There will be separate tables for Chaat, Chinese, Vegetarian and Non vegetarian and Sweets. Our members can come in the Queue and opt for their desired dishes of choice.   
        </h4>
      </div>
      <div class="col-md-2">
        <img src="images/catheringbuffetservice.jpg" style= "padding-top: 10px">
      </div>
      <div class=" col-md-3">
        <h3 style="font-size: 19px;color: #f96211"> COUNTER SERVICE:-</h3>
        <h4>
        The only difference from the Buffet Banquets lie in the fact that here we have the plenary team of members from our KK Caterers who would be assisting our Guests in the most docile manner. Whether you need an extra piece of Meat or else an additional morsel of Sweet .... Assistants will be standing at the Counter tables and we can place our Request of Choice to them in the most amicable mode.
        </h4>
      </div>
      <div class="col-md-2">
        <img src="images/catheringcounterservice.jpg" style= "padding-top: 10px">
      </div>
    </div>
    <div class="row" style="padding-top: 25px">
      <div class="col-md-offset-1 col-md-3">
        <h3 style="font-size: 19px;color: #f96211">LIVE COUNTERS:-</h3>
        <h4>
       Is it not really wonderful to see the Food being cooked live in front our Eyes ? The aroma of the Jeera and Avalu when put in the Hot Oil makes your mouth water. Imagine where your Favourite dish is served Spicy and Hot .... Will our Guests choose such a type of Food serving Slot ?? KK Caterers is for sure to prove its Dining Pot.    
        </h4>
      </div>
      <div class="col-md-2">
        <img src="images/catheringlivecountries.jpg">
      </div>

      <div class=" col-md-3">
        <h3 style="font-size: 19px;color: #f96211"> MOCKTAIL COUNTER:-</h3>
        <h4>
       The Counters for in numerous Juices and Cocktails .... Whether a blend of the Watermelon and Grapes or else a mix of Pine Apple and Sapota !! Feel the Chill in the complete bunch of Fruits. Boost your Energy at our Mock tail Counters before having the Grand Feast !! KK Caterers will allure the Eyes of the Guests in the first sight with copious shades of Mocktails in Coloured Bottles and charm their senses with the most chilling Mocktails.
        </h4>
      </div>
      <div class="col-md-2">
        <img src="images/catheringmocktailcounter.jpg">
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
