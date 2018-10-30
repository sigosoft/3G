<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 hi<!DOCTYPE html>
<html>
<head>
       <?php include"partial/header.php"?>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                                        <span>
                                         <!--   <img src="<?=base_url()?>assets/images/logo.png" alt="" height="26">-->
                                        </span>
                        <i>
                            <img src="<?=base_url()?>assets/images/logo_sm.png" alt="" height="30">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="<?=base_url()?>assets/images/admin.png" alt="user" class="rounded-circle"> <span class="ml-1"><?php $user = $this->session->userdata['user']; echo $user['username']; ?>  <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                               

                                <!-- item-->
                                <a href="<?=site_url('Login/logout')?>" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php include "partial/sidebar.php" ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                   <h4 class="page-title float-left">Add Brand</h4>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        </div><!-- /.modal -->


    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                                 
                <form id="demo-form2" method="POST" action="<?=site_url('Brand/insert')?>"        enctype="multipart/form-data"  class="form-horizontal form-label-left" onkeypress="return event.keyCode != 13;">
                      
                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Brandname"> Brand Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 googleTranslateElementInit">
                          <input id="Brandname" class="form-control col-md-7 col-xs-12" name="brandname" placeholder="Brand Name" required="required" type="text">
                        </div>
                      
                      </div>

                       
                  
                  <!--     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dname">Phone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 googleTranslateElementInit">
                          <input id="phone" class="form-control col-md-7 col-xs-12" name="phone" placeholder="Phone" required="required" type="text">
                        </div>
                      
                      </div>
                      
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Email">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" name="email" placeholder="Email" type="email" required>
                        </div>
                      </div>
                      
                       
                      
                  
                      
                      
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Address">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="form-control col-md-7 col-xs-12" name="address" placeholder="address" required></textarea>
                        </div>
                      </div>
                      
                      
                 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Image">Image<span class=""></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="image" class="form-control col-md-7 col-xs-12" name="image" placeholder=" Image" type="file">
                        </div>
                      </div>-->

                      
                
                                    

                     
 

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="<?=site_url('Brand/index')?>"><button type="button" class="btn btn-primary" >Cancel</button></a>
                          <input type="submit" name="submit" class="btn btn-success" value="Add Brand">
                        </div>
                      </div>
                    </form>
                                 

                                </div>
                            </div>
                        </div> <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include "partial/footer.php"  ?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <?php include "partial/script.php"  ?>

    </body>
</html>

