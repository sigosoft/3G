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
                                   <h4 class="page-title float-left">Edit Video</h4>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        </div><!-- /.modal -->


    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                                 
                <form id="demo-form2" method="POST" action="<?=site_url('Product/update_video/'.$products->product_id)?>" enctype="multipart/form-data"  class="form-horizontal form-label-left" onkeypress="return event.keyCode != 13;">
                      
                    
                       <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="video">Video<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="video" class="form-control col-md-7 col-xs-12" name="video" placeholder="Video" type="file" >
                    </div>
                </div>



                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="<?=site_url('Product/show')?>"><button type="button" class="btn btn-primary" >Cancel</button></a>
                          <input type="submit" name="submit" class="btn btn-success" value="Update">
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
        
        
 <script>


<?php 
$message1=$this->session->flashdata('error');

if(isset($message1)){ ?>
alert("unsupported file format");
<?php } ?>
</script>


        
         <script type="">
         
         
         
    function preview_video(id)
     {
       var id = id.id;
       var x = document.getElementById(id);
       var size = x.files[0].size;
       if (size > 50000000) {
         alert('Please select an video with size less than 50 mb.');
         document.getElementById(id).value = "";
       }
       else {
         var val = x.files[0].type;
         var type = val.substr(val.indexOf("/") + 1);
         s_type = [' AVI','FLV','WMV','MOV','mp4'];
         var flag = 0;
         for (var i = 0; i < s_type.length; i++) {
           if (s_type[i] == type) {
             flag = flag + 1;
           }
         }
         if (flag == 0) {
           alert('This file format is not supported.');
           document.getElementById(id).value = "";
           //alert(type);
         }
       /*  else {
           var reader = new FileReader();
           reader.onload = function()
           {
             var cn = id.substring(3);
             var preview = 'preview' + cn;
             var output = document.getElementById(preview);
             output.src = reader.result;
           }
           reader.readAsDataURL(x.files[0]);
         }*/

       }
     }
   </script>
    </body>
</html>

