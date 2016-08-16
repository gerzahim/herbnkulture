<!-- BEGIN HEADER -->
<div class="container-fluid main_bg">
  <div class="col-sm-2 lateral"></div>
  <div class="col-sm-8 header">
        <div class="col-sm-3 header-large-div"><img class="logo" src="images/Logoherbnkulture.png">
        </div>
        <div class="col-sm-5 header-large-div"><img class="lema" src="images/Lema1.jpg"></div>
        <?php if(Auth::guest()): ?>
          <div class="col-sm-4 header-short-div" align="right"><a href="#">Checkout</a> | <a href="<?php echo e(url('/login')); ?>">Login</a> | <a href="<?php echo e(url('/register')); ?>">Join Now</a></div>
        <?php else: ?>
          <div class="col-sm-4 header-short-div" align="right"><a href="#"><a href="#">User Account</a> |Checkout</a> | <a href="<?php echo e(url('/logout')); ?>">Logout</a> </div>
        <?php endif; ?>        
        <!--
          <div class="col-sm-4 header-short-div" align="right"><a href="#">
          Checkout</a> | <a href="<?php echo e(url('/login')); ?>">Login</a> | <a href="<?php echo e(url('/register')); ?>">Join Now</a></div> 
        -->
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
