<head>
    <meta charset="utf-8"/>
    <title>Operação de Sistemas - @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Portal da Operação de Sistemas da Oi" name="description"/>
    <meta content="Paulo Carmino (GlobalWeb)" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="metronic/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="metronic/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="metronic/assets/admin/layout3/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="metronic/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="row"> <!-- 6 + 6 = 12 -->
                <div class="col-md-4">
                    <div class="page-logo" style="text-align: left;">
                        <img src="images/logo_gw.png" alt="logo" class="logo-default" style="height: 60px">
                    </div>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="page-logo">
                        <a href="index.html"><h1>Operação de Sistemas</h1></a>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: right; margin-top:13px;">
                    <div class="page-logo">
                        <img src="images/logo_oi.jpg" alt="logo" class="logo-default" style="height: 40px">
                    </div>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->

        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    @include('layout.menu')
            <!-- END HEADER MENU -->
</div>