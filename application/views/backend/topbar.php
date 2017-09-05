</head>
<body class="skin-red">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <?php echo anchor('backend','<b>My Admin</b>', array('class'=>'logo'));?>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
					
						<!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

								<img src='<?php echo base_url('images/empty_photo.png');?>' border='0' class="user-image" alt="User Image"/>
											
                                Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">									

									<img src='<?php echo base_url('images/empty_photo.png');?>' border='0' class="img-circle" alt="User Image"/>

                                    <p>
                                        Admin<br>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
										<?php echo anchor('backend/logout','<span class="glyphicon glyphicon-log-out"></span> Sign out', array('class'=>"btn btn-default btn-flat",'onclick' => "return confirm('Anda yakin akan logout?')"));?>
                                    </div>
                                </li>
                            </ul>
                        </li>							
              
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->