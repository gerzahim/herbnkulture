<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HerbnKulture</title>
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
 <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END HEADER -->

<!-- BEGIN MENUTOP -->
 <?php echo $__env->make('layouts.menutop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END MENUTOP -->

<!-- BEGIN BANNER -->
 <?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END BANNER -->

<!-- BEGIN BODY -->
  <div class="container-fluid main_bg">
    <div class="col-sm-2 lateral"></div>
    <!-- BEGIN SIDEBAR -->
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END SIDEBAR -->
        
    <!-- BEGIN CONTENT -->         
    <?php echo $__env->make('layouts.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END CONTENT -->  
    <div class="col-sm-2 lateral"></div>
  </div>
<!-- END BODY -->

<!-- BEGIN FOOTER -->
 <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END FOOTER -->


</body>
</html>
