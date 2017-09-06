<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

    <title>Bootsnav - Bootstrap menu multi purpose header</title>
	
	<!-- Strat Bootstrap --
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<!-- End Bootstrap -->
	
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
	
	<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.5.0/css/font-awesome.min.css') ?>"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/nav/css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/nav/css/bootsnav.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/nav/css/style.css');?>" rel="stylesheet">
    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_frontend.css');?>" />
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>     
        
    <!-- Start Navigation -->
    <nav class="navbar navbar-default bootsnav">

   

        <div class="container">            


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
               <!-- <a class="navbar-brand" href="#brand"><img src="images/brand/logo-black.png" class="logo" alt=""></a>-->
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu One</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Two</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Three</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>    
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Four</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dropdowns</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   


    </nav>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Content -->
    <div class="section">
        <div class="container">
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
            <p>
                Lorem ipsum dolor sit amet, vix diam nusquam at. Ex usu labitur nostrud invenire, eos option senserit adversarium in. Est id falli debitis, no novum saperet complectitur mei. Id dictas feugiat deserunt sea, nam te possim gubergren vulputate, eu pro discere officiis. Sit legimus erroribus eu, vel numquam reprehendunt signiferumque eu. Te eam aeque maiorum, pri ad dicta vitae. Expetenda repudiare assentior ut eam, usu ea malis possit quaerendum. Eos idque senserit constituto ut.
            </p>
        </div>
    </div>
    <!-- End Content -->
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- <script src="http://localhost/newmyacico/assets/nav/js/bootstrap.min.js"></script>-->
	
	<script src="<?php echo base_url('assets/nav/js/bootstrap.min.js');?>"></script>
    
    <!-- Bootsnavs --
    <script src="http://localhost/newmyacico/assets/nav/js/bootsnav.js"></script>-->
	<script src="<?php echo base_url('assets/nav/js/bootsnav.js');?>"></script>
</body>
</html>
