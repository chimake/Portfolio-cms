<?php $this->load->view('admin/components/page_head');?>
<body class="theme-black">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="row">
                <div class="col-lg-3 col-md-12">

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card-plain">
                        <div class="header">
                            <h5>Log in</h5>
                        </div>
                        <form class="form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="User Name">
                                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            <div class="input-group">
                                <input type="password" placeholder="Password" class="form-control" />
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </form>
                        <div class="footer">
                            <a href="index.html" class="btn btn-primary btn-round btn-block">SIGN IN</a>
                            <a href="sign-up.html" class="btn btn-primary btn-simple btn-round btn-block">SIGN UP</a>
                        </div>
                        <a href="forgot-password.html" class="link">Forgot Password?</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12"></div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>