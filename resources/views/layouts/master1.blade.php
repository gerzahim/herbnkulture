<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- CSS GENERAL -->
  <link rel="stylesheet" href="css/style.css">  
  <!-- CSS MENU HORIZONTAL -->
  <link href="css/menuhorizontal/dropdown_menu.css" media="screen" rel="stylesheet" type="text/css" />
  <!-- CSS MENU VERTICAL -->
  <link href="css/menuvertical/dropdown/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/menuvertical/dropdown/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>

<!-- BEGIN HEADER -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral"></div>
  <div class="col-sm-8 header">
        <div class="col-sm-3 header-large-div"><img class="logo" src="images/Logoherbnkulture.png">
        </div>
        <div class="col-sm-5 header-large-div"><img class="lema" src="images/Lema1.jpg"></div>
        <div class="col-sm-4 header-short-div" align="right"><a href="#">Checkout</a> | <a href="#">Login</a> | <a href="#">Join Now</a></div>
        <div class="col-sm-4 header-short-div"></div>
        <div class="col-sm-4 header-short-div3" align="right">
          <div class="bottom-content">
            3 Item(s) - $21.95
          </div>
          <img class="cart" src="images/cart.png">

          <img class="mycart" src="images/mycartbutton.jpg" alt="Hover to reveal the location on the map"
                onmouseover="this.src='images/mycartbuttonhover.jpg';"
                onmouseout="this.src='images/mycartbutton.jpg';"/>
          </div>      
  </div> 
  <div class="col-sm-2 lateral"></div>
</div>
<!-- END HEADER -->
<!-- BEGIN MENUTOP -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral">1</div>
  <div class="col-sm-8 menutop">
      <ul class="dropdown dropdown-horizontal">
        <li><a href="#home">HOME</a></li>
        <li><a href="news">PRODUCTS</a>
            <ul>
                <li><a href="candy.html">candy</a></li>
                <li><a href="chocolate.html">chocolate</a></li>
                <li><a href="icecream.html">ice cream</a></li>
            </ul>
        </li>     
        <li><a href="#contact">NEW ARRIVALS</a></li>
        <li><a href="#about">PROMOTIONS</a></li>
        <li><a href="#about">CONTACT US</a></li>
      </ul>
  </div> 
  <div class="col-sm-2 lateral">3</div>
</div>
<!-- END MENUTOP -->

<!-- BEGIN BANNER -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral">1</div>
  <div class="col-sm-8 banner">
    <img src="media/banner/01.jpg">
  </div>
  <div class="col-sm-2 lateral">3</div>
</div>
<!-- END BANNER -->

<!-- BEGIN BREADCRUMB -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral">1</div>
  <div class="col-sm-8 notification">
      <div class="breadcrumb">HOME >> PAGE1</div>
  </div>
  <div class="col-sm-2 lateral">3</div>
</div>
<!-- END BREADCRUMB -->

<!-- BEGIN BODY -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral">111</div>
<!-- BEGIN SIDEBAR -->
 <div class="col-sm-2 sidebar">
    <ul id="nav" class="dropdownv dropdown-vertical">
      <li><a href="./">Home</a></li>
      <li><span class="dir">About Us</span>
        <ul>
          <li><a href="./">History</a></li>
          <li><a href="./">Our Vision</a></li>
          <li><span class="dir">The Team</span>
            <ul>
              <li><a href="./">Brigita</a></li>
              <li><a href="./">John</a></li>
              <li><a href="./">Michael</a></li>
              <li><a href="./">Peter</a></li>
              <li><a href="./">Sarah</a></li>
            </ul>
          </li>
          <li><a href="./">Clients</a></li>
          <li><a href="./">Testimonials</a></li>
          <li><a href="./">Press</a></li>
          <li><a href="./">FAQs</a></li>
        </ul>
      </li>
      <li><span class="dir">Services</span>
        <ul>
          <li><a href="./">Product Development</a></li>
          <li><a href="./">Delivery</a></li>
          <li><a href="./">Shop Online</a></li>
          <li><a href="./">Support</a></li>
          <li><a href="./">Training &amp; Consulting</a></li>
        </ul>
      </li>
      <li><span class="dir">Products</span>
        <ul>
          <li><a href="./" class="dir">New</a>
            <ul>
              <li><a href="./">Corporate Use</a></li>
              <li><a href="./">Private Use</a></li>
            </ul>
          </li>
          <li><a href="./" class="dir">Used</a>
            <ul>
              <li><a href="./">Corporate Use</a></li>
              <li><a href="./">Private Use</a></li>
            </ul>
          </li>
          <li><a href="./">Featured</a></li>
          <li><a href="./">Top Rated</a></li>
          <li><a href="./">Prices</a></li>
        </ul>
      </li>
      <li><a href="./">Gallery</a></li>
      <li><a href="./">Events</a></li>
      <li><a href="./">Careers</a></li>
      <li><a href="./" class="dir">Contact Us</a>
        <ul>
          <li><a href="./">Enquiry Form</a></li>
          <li><a href="./">Map &amp; Driving Directions</a></li>
          <li><a href="./">Your Feedback</a></li>
        </ul>
      </li>
    </ul>
</div>
        <!-- END sidebar -->    
 <!-- BEGIN CONTENT -->         
 <div class="col-sm-6 content">222</div>
 <!-- END CONTENT -->  
  <div class="col-sm-2 lateral">444</div>
</div>
<!-- END BODY -->
<!-- BEGIN FOOTER -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral">1</div>
  <div class="col-sm-2 footer">2</div>
  <div class="col-sm-2 footer">2</div>
  <div class="col-sm-2 footer">2</div>
  <div class="col-sm-2 footer">2</div>      
  <div class="col-sm-2 lateral">4</div>
</div>
<!-- END FOOTER -->
</body>
</html>
