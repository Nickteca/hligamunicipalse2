<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
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
    <?= $this->renderSection('css'); ?>
</head>

<body class="hold-transition layout-top-nav">
    <?= $this->include('Front/Layauts/VHeader'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('Front/Layauts/VFooter'); ?>

    <!-- Javascripts personalizadas -->
    <?= $this->renderSection('jss'); ?>
</body>

</html>