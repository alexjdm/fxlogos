<?php
/**
 * Created by PhpStorm.
 * User: alexj
 * Date: 26-03-2016
 * Time: 0:51
 */
$titulo = 'BalMetal';

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <?php require_once('header.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require_once('main-header.php'); ?>

            <?php require_once('main-sidebar.php'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php require_once('routes.php'); ?>
            </div><!-- /.content-wrapper -->

            <?php require_once('footer.php'); ?>

            <?php require_once('control-sidebar.php'); ?>

        </div>

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->

    </body>

</html>