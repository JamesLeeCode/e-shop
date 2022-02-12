<?php
session_start();


if (isset($_POST['add_to_cart'])) {
  if(isset($_SESSION['cart']))
  {
   $session_array_id = array_column($_SESSION['cart'], "id");

   if(!in_array($_GET['id'], $session_array_id)){
     $session_array = array(
       'id'=> $_GET['id'],
       "name" => $_POST["name"],
       "price" => $_POST["price"],
       "quantity" => $_POST["quantity"]
     );
     $_SESSION['cart'][] = $session_array;
   }
  }
  else{
     $session_array = array(
       'id'=> $_GET['id'],
       "name" => $_POST["name"],
       "price" => $_POST["price"],
       "quantity" => $_POST["quantity"]
     );
     $_SESSION['cart'][] = $session_array;
  }

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Point Of Sale </title>
<link rel="stylesheet" href="assets/css/style-starter.css">
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="dist/css/adminlte.min.css">


 <!-- Template CSS -->

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

 <!-- Preloader -->
 <div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
 </div>

 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>

   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Navbar Search -->
     <li class="nav-item">
       <a class="nav-link" data-widget="navbar-search" href="#" role="button">
         <i class="fas fa-search"></i>
       </a>
       <div class="navbar-search-block">
         <form class="form-inline">
           <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                 <i class="fas fa-search"></i>
               </button>
               <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                 <i class="fas fa-times"></i>
               </button>
             </div>
           </div>
         </form>
       </div>
     </li>

     <!-- Messages Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-comments"></i>
         <span class="badge badge-danger navbar-badge">3</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 Brad Diesel
                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">Call me whenever you can...</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 John Pierce
                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">I got your message bro</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 Nora Silvester
                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">The subject goes here</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
       </div>
     </li>
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-bell"></i>
         <span class="badge badge-warning navbar-badge">15</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <span class="dropdown-item dropdown-header">15 Notifications</span>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-envelope mr-2"></i> 4 new messages
           <span class="float-right text-muted text-sm">3 mins</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-users mr-2"></i> 8 friend requests
           <span class="float-right text-muted text-sm">12 hours</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-file mr-2"></i> 3 new reports
           <span class="float-right text-muted text-sm">2 days</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         <i class="fas fa-expand-arrows-alt"></i>
       </a>
     </li>

   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">E-Shopping</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Eloit Loti</a>
       </div>
     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="dashboard.html" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="onlineOrders.html" class="nav-link ">
             <i class="nav-icon fas fa-calendar-alt"></i>
             <p>
               Online Orders
               <span class="badge badge-info right">2</span>
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pos.html" class="nav-link active">
             <i class="nav-icon far fa-image"></i>
             <p>
               Point Of Sale
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="pages/kanban.html" class="nav-link">
             <i class="nav-icon fas fa-columns"></i>
             <p>
               Orders History
             </p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Online Orders </h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">

           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <!-- Info boxes -->
       <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Online Orders Today</span>
               <span class="info-box-number">
                 21
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Pending Orders</span>
               <span class="info-box-number">3</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->

         <!-- fix for small devices only -->
         <div class="clearfix hidden-md-up"></div>

         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">In-Store Orders</span>
               <span class="info-box-number">76</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Total Cash Today</span>
               <span class="info-box-number">R2,500</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
       </div>



       <div class="row">
         <!-- Left col -->
         <div class="col-md-6">

           <!-- PRODUCT LIST -->
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">School Boys Kota's</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                   <i class="fas fa-minus"></i>
                 </button>

               </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">

               <ul class="products-list product-list-in-card pl-2 pr-2">
                 <li class="item">
                   <div class="product-img">
                     <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                   </div>
                   <div class="product-info">
                     <form method="post" action="pos.php?id=p1325">
                     <column>
                       <div class="col-8 float-left">
                         <a href="javascript:void(0)" class="product-title">School-Boy XXL</a>
                       </div>
                       <div class="col-2 float-right">
                         <input type="number" name="quantity" class="form-control form-control-sm float-right" value="1" required>
                         <input type="text" name="price" class="form-control form-control-sm float-right" value="39" hidden>
                        <input type="text" name="name" class="form-control form-control-sm float-right" value="School-Boy XXL" hidden>
                       </div>
                       <div class="col-2 float-right">
                         <span style="margin-top: 5px" class="badge badge-warning float-left">R39,00</span>
                       </div>
                     </column>
                     <div style="height:5px">
                     </div>
                      <button name="add_to_cart" id="add_to_cart"   type="submit" class="float-bottom btn btn-block btn-warning btn-sm">Add To Cart</button>
                   </form>
                   </div>
                 </li>
                 <li class="item">
                   <div class="product-img">
                     <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                   </div>
                   <div class="product-info">
                     <form method="post" action="pos.php?id=p1346">
                     <column>
                       <div class="col-8 float-left">
                         <a href="javascript:void(0)" class="product-title">School-Boy 5 With Cheese</a>
                       </div>
                       <div class="col-2 float-right">
                         <input type="number" name="quantity" class="form-control form-control-sm float-right" value="1" required>
                         <input type="text" name="price" class="form-control form-control-sm float-right" value="25" hidden>
                        <input type="text" name="name" class="form-control form-control-sm float-right" value="School-Boy 5 With Cheese" hidden>
                       </div>
                       <div class="col-2 float-right">
                         <span style="margin-top: 5px" class="badge badge-warning float-left">R25</span>
                       </div>
                     </column>
                     <div style="height:5px">
                     </div>
                      <button name="add_to_cart" id="add_to_cart"  type="submit" class="float-bottom btn btn-block btn-warning btn-sm">Add To Cart</button>
                   </form>
                   </div>
                 </li>

                 <li class="item">
                   <div class="product-img">
                     <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                   </div>
                   <div class="product-info">
                     <form method="post" action="pos.php?id=p1363">
                     <column>
                       <div class="col-8 float-left">
                         <a href="javascript:void(0)" class="product-title">School-Boy Kota</a>
                       </div>
                       <div class="col-2 float-right">
                         <input type="number" name="quantity" class="form-control form-control-sm float-right" value="1" required>
                         <input type="text" name="price" class="form-control form-control-sm float-right" value="30" hidden>
                        <input type="text" name="name" class="form-control form-control-sm float-right" value="School-Boy Kota" hidden>
                       </div>
                       <div class="col-2 float-right">
                         <span style="margin-top: 5px" class="badge badge-warning float-left">R30,00</span>
                       </div>
                     </column>
                     <div style="height:5px">
                     </div>
                      <button name="add_to_cart" id="add_to_cart"  type="submit" class="float-bottom btn btn-block btn-warning btn-sm">Add To Cart</button>
                   </form>
                   </div>
                 </li>
               </ul>
             </div>
           </div>
           <!--Drinks PRODUCT LIST -->
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Drinks</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                   <i class="fas fa-minus"></i>
                 </button>

               </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">

               <ul class="products-list product-list-in-card pl-2 pr-2">
                 <li class="item">
                   <div class="product-img">
                     <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                   </div>
                   <div class="product-info">
                     <form method="post" action="pos.php?id=p9642">
                     <column>
                       <div class="col-8 float-left">
                         <a href="javascript:void(0)" class="product-title">African Juice 300ml</a>
                       </div>
                       <div class="col-2 float-right">
                         <input type="number" name="quantity" class="form-control form-control-sm float-right" value="1" required>
                         <input type="text" name="price" class="form-control form-control-sm float-right" value="12" hidden>
                        <input type="text" name="name" class="form-control form-control-sm float-right" value="African Juice 300ml" hidden>
                       </div>
                       <div class="col-2 float-right">
                         <span style="margin-top: 5px" class="badge badge-warning float-left">R12,00</span>
                       </div>
                     </column>
                     <div style="height:5px">
                     </div>
                      <button name="add_to_cart" id="add_to_cart"   type="submit" class="float-bottom btn btn-block btn-warning btn-sm">Add To Cart</button>
                   </form>
                   </div>
                 </li>
                 <li class="item">
                   <div class="product-img">
                     <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                   </div>
                   <div class="product-info">
                     <form method="post" action="pos.php?id=p31657">
                     <column>
                       <div class="col-8 float-left">
                         <a href="javascript:void(0)" class="product-title">Coca Cola 500ml</a>
                       </div>
                       <div class="col-2 float-right">
                         <input type="number" name="quantity" class="form-control form-control-sm float-right" value="1" required>
                         <input type="text" name="price" class="form-control form-control-sm float-right" value="15" hidden>
                        <input type="text" name="name" class="form-control form-control-sm float-right" value="Coca Cola 500ml" hidden>
                       </div>
                       <div class="col-2 float-right">
                         <span style="margin-top: 5px" class="badge badge-warning float-left">R15</span>
                       </div>
                     </column>
                     <div style="height:5px">
                     </div>
                      <button name="add_to_cart" id="add_to_cart"  type="submit" class="float-bottom btn btn-block btn-warning btn-sm">Add To Cart</button>
                   </form>
                   </div>
                 </li>

                 <li class="item">
                   <div class="product-img">
                     <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                   </div>
                   <div class="product-info">
                     <form method="post" action="pos.php?id=p1135">
                     <column>
                       <div class="col-8 float-left">
                         <a href="javascript:void(0)" class="product-title">Fruit Juice 500ml </a>
                       </div>
                       <div class="col-2 float-right">
                         <input type="number" name="quantity" class="form-control form-control-sm float-right" value="1" required>
                         <input type="text" name="price" class="form-control form-control-sm float-right" value="16" hidden>
                        <input type="text" name="name" class="form-control form-control-sm float-right" value="Fruit Juice 500ml" hidden>
                       </div>
                       <div class="col-2 float-right">
                         <span style="margin-top: 5px" class="badge badge-warning float-left">R16,00</span>
                       </div>
                     </column>
                     <div style="height:5px">
                     </div>
                      <button name="add_to_cart" id="add_to_cart"  type="submit" class="float-bottom btn btn-block btn-warning btn-sm">Add To Cart</button>
                   </form>
                   </div>
                 </li>
               </ul>
             </div>
           </div>

         </div>

         <div class="col-md-6">

           <!-- PRODUCT LIST -->
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Shopping Cart</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                   <i class="fas fa-minus"></i>
                 </button>

               </div>
             </div>
             <!-- /.card-header -->
             <div style="margin:5px" class="card-body p-0">
              <div class="row">
                 <div class="col-md-4">
                  <b> Item</b>
                 </div>
                 <div class="col-md-2">
                  <b> Unit Price </b>
                 </div>
                 <div class="col-md-2">
                  <b> Quality </b>
                 </div>
                 <div class="col-md-2">
                  <b> Total </b>
                 </div>
                 <div class="col-md-2">

                 </div>
               </div >

                <?php
                   if (!empty($_SESSION['cart'])) {
                      foreach ($_SESSION['cart'] as $key => $value) {
                        $subTotal  = 0;
                        $subTotal = $value["quantity"] * $value["price"];
                         ?>
                                 <div class="row">
                                           <div class="col-md-4">
                                             <?php echo $value["name"] ;  ?>
                                           </div>
                                           <div class="col-md-2">
                                             <?php echo $value["price"];  ?>
                                           </div>
                                           <div class="col-md-2">
                                             <?php echo $value["quantity"];  ?>
                                           </div>
                                           <div class="col-md-2">
                                            R<?php echo $subTotal  ?>
                                           </div>
                                           <div class="col-md-2">
                                          <a href="pos.php?action=remove&id=<?php echo $value['id'];  ?>">
                                            <button class='btn btn-danger btn-block btn-xs'>Remove </button>
                                          </a>
                                           </div>
                                         </div >
                                           <?php
                      }
                   }


                 ?>


             </div>
             <!-- /.card-body -->
             <div class="card-footer text-center">
               <a href="javascript:void(0)" class="uppercase">View All Products</a>
             </div>
             <!-- /.card-footer -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->
       </div>

     </div><!--/. container-fluid -->
   </section>



   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->

 <!-- Main Footer -->
 <footer class="main-footer">
   <strong>Copyright &copy; 2016-2022 <a href="https://adminlte.io">Xamarin Squid</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 1.0.0
   </div>
 </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
