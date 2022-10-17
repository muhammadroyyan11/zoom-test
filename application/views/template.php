<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Celengan | <?= $title ?></title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/app-assets/images/ico/apple-icon-120.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/pickers/pickadate/pickadate.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/calendars/extensions/daygrid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/calendars/extensions/timegrid.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/pages/app-user.css">

    <!-- DatePicker -->
    
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
    <link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- End DatePicket -->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar email-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?= userdata('nama'); ?></span><span class="user-status">Online</span></div><span><img class="round" src="<?= base_url() ?>assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?= site_url('profile')?>"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= site_url('auth/logout/'); ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url() ?>assets/html/ltr/vertical-menu-template-semi-dark/index.html">
                        <div class="feather icon-copyrigth"></div>
                        <h2 class="brand-text mb-0">Celengan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <a class="nav-link text-white">
                    <h2 class="my-0 text-center"><label id="hours"><?= date('H') ?></label>:<label id="minutes"><?= date('i') ?></label>:<label id="seconds"><?= date('s') ?></label></h2>
                </a>
                <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active nav-item"' : ''?>><a href="<?= site_url('dashboard') ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Control</span>
                </li>
                <li <?=$this->uri->segment(1) == 'room' || $this->uri->segment(1) == '' ? 'class="active nav-item"' : ''?>><a href="<?= site_url('room') ?>"><i class="feather icon-x-circle"></i><span class="menu-title" data-i18n="Tanggungan">Room</span></a>
                </li>
                <?php if (is_admin()) { ?>
                    <li class=" navigation-header"><span>User Management</span>
                    </li>
                    <li <?=$this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'class="active nav-item"' : ''?>><a href="<?= site_url('user') ?>"><i class="feather icon-users"></i><span class="menu-title" data-i18n="User Management">User Management</span></a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <?php echo $contents ?>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="text-bold-800 grey darken-2" href="#">OKI POLINEMA,</a>All rights Reserved</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?= base_url() ?>assets/assets/js/ajax.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/daygrid.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/timegrid.min.js"></script>
    <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/interactions.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/app-assets/js/scripts/pages/dashboard-analytics.js"></script> -->

    <script>
        var hoursLabel = document.getElementById("hours");
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        setInterval(setTime, 1000);

        function setTime() {
            secondsLabel.innerHTML = pad(Math.floor(new Date().getSeconds()));
            minutesLabel.innerHTML = pad(Math.floor(new Date().getMinutes()));
            hoursLabel.innerHTML = pad(Math.floor(new Date().getHours()));
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }

        <?php if (@$this->session->absen_needed) : ?>
            var absenNeeded = '<?= json_encode($this->session->absen_needed) ?>';
            <?php $this->session->sess_unset('absen_needed') ?>
        <?php endif; ?>
    </script>

    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#tangalrange').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }
 
            $('#tanggalrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
                }
            }, cb);

            cb(start, end);
        });

        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
    </script>


</body>
<!-- END: Body-->

</html>