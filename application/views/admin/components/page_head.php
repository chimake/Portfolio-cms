<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title><?php echo $meta_title; ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/plugins/morrisjs/morris.css" />
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/plugins/nestable/jquery-nestable.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/css/main.css">
    <link rel="stylesheet" href="<?=base_url()?>public_html/backendstyling/assets/css/color_skins.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=uz0x7n6ffclowpg6ob3mx0f3w8eib9nnh7mliqbyty79itdy"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/calendar/calendar.js"></script>
    <script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/profile.js"></script>
    <!-- Jquery Core Js -->
     <!-- Lib Scripts Plugin Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/jquery-ui.min.js"></script> <!-- Jquery ui Js -->
    <script src="<?=base_url()?>public_html/backendstyling/assets/js/pages/jquery.mjs.nestedSortable.js"></script> <!-- Lib Scripts Plugin Js -->

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
</head>