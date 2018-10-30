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
                                   <h4 class="page-title float-left">Manage Brand</h4>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        </div><!-- /.modal -->


    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                                 
              
                       <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         
                          <th> Name</th>
                       
                          <th>Action</th>
                          

                        </tr>
                      </thead>


                      <tbody>

                     <?php foreach($brands as $brand){ ?>
                        <tr>
                            <td><?=$brand->brand_name?></td>
                            
                            <td><a href="<?=site_url('brand/edit/'.$brand->brand_id)?>">Edit</a></td>
                          <!--  <td><a href="<?=site_url('brand/delete/'.$brand->brand_id)?>">Delete</a></td>-->
                        </tr>

                     <?php } ?>
                        
                        <tr>
                                   
                      
                        </tr>

                      
                      
                      </tbody>
                    </table>

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

