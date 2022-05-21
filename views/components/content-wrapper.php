<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include_once 'content-header.php' ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <?php
      // tangkap req url
      $req = $_REQUEST['path'];
      if (!empty($req)) {
        if($req == 'home'){
          include_once 'views/home.php';
        }else if($req == 'about'){
          include_once 'views/about.php';
        }else if($req == 'education'){
          include_once 'views/education.php';
        }else if($req == 'gallery'){
          include_once 'views/gallery.php';
        }else if($req == 'contact'){
          include_once 'views/contact.php';
        }
      }else{
        include_once 'views/home.php';
      }
      ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
