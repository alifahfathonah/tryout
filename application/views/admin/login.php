<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('dst/assets/css/bootstrap.css '); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('dst/assets/font-awesome/css/font-awesome.css '); ?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('dst/assets/css/style.css '); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dst/assets/css/style-responsive.css '); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="Login">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password"><br><br>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		          	
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('dst/assets/js/jquery.js '); ?>"></script>
    <script src="<?php echo base_url('dst/assets/js/bootstrap.min.js '); ?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url('dst/assets/js/jquery.backstretch.min.js '); ?>"></script>
    <script>
        $.backstretch("<?php echo base_url('dst/assets/img/login-bg.jpg '); ?>", {speed: 500});
    </script>


  </body>
</html>
