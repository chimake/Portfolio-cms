<div class="header">
    <h5>Log in</h5>
    
</div>
<?= validation_errors(); ?>
<?= form_open(); ?>
    <div class="input-group">
        <input type="text" name="email" class="form-control" placeholder="Email">
        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
    </div>
    <div class="input-group">

        <input type="password" name="password" placeholder="Password" class="form-control" />
        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
    </div>
<div class="footer">
    <?php echo form_submit('submit', 'SIGN IN', 'class="btn btn-primary btn-round btn-block"'); ?>
    <a href="sign-up.html" class="btn btn-primary btn-simple btn-round btn-block">SIGN UP</a>
</div>
<?= form_close(); ?>
<a href="forgot-password.html" class="link">Forgot Password?</a>
</div>