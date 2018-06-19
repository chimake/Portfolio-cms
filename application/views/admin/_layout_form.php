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
                        <?php $this->load->view($subview); ?>
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