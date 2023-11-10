<!DOCTYPE html>
<!--
    --AdminLTE is a fully responsive administration template. Based on Bootstrap 4 framework. 
        Highly customizable and easy to use. Fits many screen resolutions from small mobile devices to large desktops.
    --This is a starter template page. Use this page to start your new project from
        scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->renderSection('title'); ?>&nbsp;-&nbsp; Liga Municipal SE
    </title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <?= $this->include('Admin/Layauts/VHeader'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('Admin/Layauts/VFooter'); ?>

    <!-- Javascripts personalizadas -->
    <?= $this->renderSection('jss'); ?>
</body>

</html>