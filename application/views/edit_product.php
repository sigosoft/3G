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
                                   <h4 class="page-title float-left">Edit Product</h4>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        </div><!-- /.modal -->


    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                                 
                   <form id="demo-form2" method="POST" action="<?=site_url('Product/update/'.$products->product_id)?>"     enctype="multipart/form-data"  class="form-horizontal form-label-left" onkeypress="return event.keyCode != 13;">
                      
                    
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UID"> UID No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 googleTranslateElementInit">
                          <input id="UID" class="form-control col-md-7 col-xs-12" name="UID" placeholder="UID " required="required" type="number" value="<?=$products->UID?>">
                        </div>
                      
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Productname"> Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 googleTranslateElementInit">
                          <input id="Productname" class="form-control col-md-7 col-xs-12" name="Productname" placeholder="Product Name" required="required" type="text" value="<?=$products->product_name?>">
                        </div>
                      
                      </div>

                       
                  
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dname">Model No <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 googleTranslateElementInit">
                          <input id="Model No" class="form-control col-md-7 col-xs-12" name="modelno" placeholder="Model No" required="required" type="number" value="<?=$products->model_no?>">
                        </div>
                      
                      </div>
                      
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Price">Price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Price" class="form-control col-md-7 col-xs-12" name="Price" placeholder="Price" type="Price" required value="<?=$products->price?>">
                        </div>
                      </div>
                                             
                                          
                <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Brand"> Brand Name <span class="required">*</span>
                   </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                                              
                    <select name="brand" id="brand" class="form-control col-md-7 col-xs-12" required>
                   <?php foreach($brands as $brand){ ?>
                  
                       <option value="<?=$brand->brand_id?>" <?php if($products->brand_id == $brand->brand_id){echo "selected";} ?>>
                        <?=$brand->brand_name?>
                        </option>

                        <?php
                      }
                      ?>         
                        
                    </select> 
                                  
                        </div>
                    </div>
                    

                <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Product Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="<?=base_url()?><?=$products->image?>" class="img-thumbnail" width="100%"/><br><br>
                        <a href="<?=site_url('Product/imageedit/'.$products->product_id)?>">Edit Image</a><br><br>                      
                      </div>
                    </div>




                    <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="video">Video<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                    <!--    <img src="<?=base_url()?>upload/<?=$product->video?>" class="" width="100%"/><br><br>-->
                        <video width="320" height="240" controls="controls" > <source src="<?=base_url()?><?=$products->video?>" type="video/mp4"> <object data="" width="320" height="240"> <embed width="320" height="240" src="<?=base_url()?><?=$products->video?>"> </object> </video>
                      
                      </div>
                       <a href="<?=site_url('Product/videoedit/'.$products->product_id)?>">Edit Video</a><br><br> 
                    </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="<?=site_url('Product/show')?>"><button type="button" class="btn btn-primary" >Cancel</button></a>
                          <input type="submit" name="submit" class="btn btn-success" value="Update Product">
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

