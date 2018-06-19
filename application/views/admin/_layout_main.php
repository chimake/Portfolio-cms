<?php $this->load->view('admin/components/page_head');?>

<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="<?=base_url()?>public_html/backendstyling/assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<?php $this->load->view('admin/components/page_overlay_menu');?>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->

<?php $this->load->view('admin/components/left_side_menu');?>


<section class="content profile-page">
    <div class="container-fluid">



                    <?php $this->load->view($subview); ?>


    </div>
</section>

<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/calendar/calendar.js"></script>
<script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/profile.js"></script>
<!-- Jquery Core Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<!-- Jquery DataTable Plugin Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?=base_url()?>public_html/backendstyling/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>public_html/backendstyling/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>public_html/backendstyling/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?=base_url()?>public_html/backendstyling/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?=base_url()?>public_html/backendstyling/assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="<?=base_url()?>public_html/backendstyling/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/tables/jquery-datatable.js"></script>
<script>
    $(".delete_entry").click(function () {
        confirm("Are you sure you want to delete this user record");
    });
</script>

</body>
</html>