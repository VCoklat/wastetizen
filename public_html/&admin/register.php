<?php
 require_once('header_login_register.php');
?>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="register_backend.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="fullname" placeholder="Full name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass2" placeholder="Retype password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
      <!--  <div class="col-xs-8">-->
      <!--    <div class="checkbox icheck">-->
      <!--      <label>-->
      <!--        <input type="checkbox" required> I agree to the <a href="#">terms</a>-->
      <!--      </label>-->
      <!--    </div>-->
      <!--  </div>-->
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" value="REGISTER" name="register" >   
        </div>
         <!--/.col -->
      </div>
    </form>

    <!--<div class="social-auth-links text-center">-->
    <!--  <p>- OR -</p>-->
    <!--  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using-->
    <!--    Facebook</a>-->
    <!--  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using-->
    <!--    Google+</a>-->
    <!--</div>-->

    <a href="index.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
