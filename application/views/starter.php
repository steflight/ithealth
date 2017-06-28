<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
     <?php include 'partial/metadata.php'; ?>
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">
           <?php include 'partial/header.php'; ?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <?php if($this->ion_auth->user()->row()->role == "directeur"): ?>
            <?php include 'partial/leftbar_directeur.php'; ?>
        <?php endif; ?>
        <?php if($this->ion_auth->user()->row()->role == "admin"): ?>
            <?php include 'partial/leftbar_admin.php'; ?>
        <?php endif; ?>
        <?php if($this->ion_auth->user()->row()->role == "personnel"): ?>
            <?php include 'partial/leftbar_agent.php'; ?>
        <?php endif; ?>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            
             <?php 
             /*$data = array(
                 'action' => $action,
                 'vue' => $vue,
                 ); */
               // $this->load->view('index',$data);
             ?>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
         <?php include 'partial/footer.php'; ?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
           <?php include 'partial/righthidebar.php'; ?>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <?php include 'partial/script.php'; ?>
  </body>
</html>
