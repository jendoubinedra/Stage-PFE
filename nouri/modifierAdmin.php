<?php 
include('includes/connect_db.php');
$id = $_GET['id'];
$req = $bdd->query("SELECT * FROM admin  where id=$id");
$donnees = $req->fetch();
 //session_start();
?>
<!DOCTYPE html> 
<html lang="en" > 
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>BE admin - Bootstrap Admin Skin</title> 
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="app/css/bootstrap.css">
   <!-- plugins CSS-->
   <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="plugins/animo/animate%2banimo.css">
   <link rel="stylesheet" href="plugins/csspinner/csspinner.min.css"> 
   <!-- App CSS-->
   <link rel="stylesheet" href="plugins/chosen/chosen.min.css">
   <link rel="stylesheet" href="app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="plugins/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="plugins/fastclick/fastclick.js" type="application/javascript"></script>
</head>

<body>
   <!-- START Main wrapper-->
   <section class="wrapper">
      <!-- START Top Navbar-->
      <?php include ('header.php')?>
      <!-- END Top Navbar-->
      <!-- START aside-->
   <?php include ('menu.php');?>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <ul class="nav">
                
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/05.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">John Smith</strong>
                           <br>
                           <small class="text-muted">smithjohn</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/06.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Richa</strong>
                           <br>
                           <small class="text-muted">richa</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-danger point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/07.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Jarden</strong>
                           <br>
                           <small class="text-muted">jarden</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-warning point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/08.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Smith</strong>
                           <br>
                           <small class="text-muted">smith</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/09.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Mohes</strong>
                           <br>
                           <small class="text-muted">mohes</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/10.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Mic</strong>
                           <br>
                           <small class="text-muted">mic</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <!-- Optional link to list more users-->
                  <a href="#" title="See more contacts" class="p">
                     <strong>
                        <small class="text-muted">&hellip;</small>
                     </strong>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- END aside-->
      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <section class="main-content">
            <h3>Modifier un Admin 
               <br>
               
            </h3>
            <!-- START row-->
            <div class="row">
               <div class="col-lg-6">
                  <form  action="controller/modifadmin.php?id=<?php echo $donnees['id']?>" method="post">
                     <!-- START panel-->
                  
                        
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="control-label">Nom</label>
                              <input type="text" name="nom" value="<?php echo $donnees['nom'] ?>" required class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-label">Login</label>
                              <input type="text" name="login" value="<?php echo $donnees['login']?>" required class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-label">Email</label>
                              <input  type="text" name="email" value="<?php echo $donnees['email']?>" required class="form-control">
                           </div>
                           <div class="form-group">
                          <label class="control-label"> Password</label>
                              <input type="password" name="password" required data-parsley-equalto="#id-password" value="<?php $donnees['password']?>" class="form-control">
                           </div>
                          
                        
                              <div class="pull-right">
                                 <button type="submit" class="btn btn-primary">Modifier</button>
                              </div>
                           
                     
                     <!-- END panel-->
                  </form>
               </div>
               
            </div>
            <!-- END row-->
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
                  <form action="#" data-parsley-validate="" novalidate="" class="form-horizontal">
                     <!-- START panel-->
                     
                  </form>
               </div>
            </div>
            <!-- END row-->
         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main plugins Scripts-->
   <script src="plugins/jquery/jquery.min.js"></script>
   <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="plugins/chosen/chosen.jquery.min.js"></script>
   <script src="plugins/slider/js/bootstrap-slider.js"></script>
   <script src="plugins/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="plugins/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="plugins/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- START Page Custom Script-->
   <!-- Form Validation-->
   <script src="plugins/parsley/parsley.min.js"></script>
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="app/js/app.js"></script>
   <!-- END Scripts-->
</body>


</html>