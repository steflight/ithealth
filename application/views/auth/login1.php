<?php $this->load->view('partial/metadata.php') ; ?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b><?= APP_NAME ?></b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Connectez-vous pour acceder à votre session</p>
        <div id="infoMessage"><?php echo $message;?></div>
        
       <?php echo form_open("auth/login");?>

          <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="username/matricule" name="identity" value="" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="password" name="password" value=""  />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"> Valider </button>
            </div><!-- /.col -->
          </div>
            
        </form>

       
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
 <?php $this->load->view('partial/script.php') ; ?>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
