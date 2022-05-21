<?php
$req = $_REQUEST['path'];
$label = empty($req) ? 'Home' : $req;
?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $label ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <?php
              if (!empty($req)) {
              ?>
              <li class="breadcrumb-item active"><?= $label ?></li>
              <?php } ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
