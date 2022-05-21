<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Admin Apps</title>
        <?php include_once 'dist/assets/kumpulancss.php'; ?>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <?php include_once 'views/components/navbar.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include_once 'views/components/sidebar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <?php include_once 'views/components/content-wrapper.php'; ?>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include_once 'views/components/footer.php'; ?>

        </div>
        <!-- ./wrapper -->
        <?php include_once 'dist/assets/kumpulanjs.php'; ?>


    </body>

</html>
