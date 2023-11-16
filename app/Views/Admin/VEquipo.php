<?= $this->extend('Admin/Layauts/VMain'); ?>

<?= $this->section('title'); ?>
Equipos
<?= $this->endSection(); ?>
<?= $this->section('css'); ?>
<!-- DataTables -->
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Ekko Lightbox -->
<link rel="stylesheet" href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/ekko-lightbox/ekko-lightbox.css">
<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css">
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<?= $this->endSection(); ?>

<!-- Content Wrapper. Contains page content -->
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Equipos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Inicio</a></li>
                        <li class="breadcrumb-item active">Equipos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <form method="post" action="<?= base_url('admin/registrar_equipo') ?>">
                        <div class="card card-primary elevation-4">
                            <div class="card-header">
                                <h3 class="card-title">Datos Equipo</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <code> <?= session('errors.nombre_equipo') ?></code>
                                        <label>Nombre del Equipo</label>
                                        <div class="input-group">

                                            <input type="text" value="<?= old('nombre_equipo') ?>" name="nombre_equipo"
                                                class="form-control" placeholder="Nombre Equipo">
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-users"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <code> <?= session('errores') ?></code>
                                            <label>Ligas registradas del equipo</label>
                                            <div class="select2-purple">
                                                <select name="liga_seleccionada[]" class="select2" multiple="multiple"
                                                    data-placeholder="Select a State"
                                                    data-dropdown-css-class="select2-purple" style="width: 100%;"
                                                    required>
                                                    <?php

                                                    foreach ($nligas as $key => $value) {
                                                        ?>
                                                        <option value="<?= $value['id_liga'] ?>">
                                                            <?= $value['nombre_liga'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save
                                    changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            if (count($nequipos) <= 0) {
                                ?>
                                <div class="alert alert-danger alert-dismissible">

                                    <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                    No hay liga Equipos
                                </div>
                                <?php
                            } else {
                                ?>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Logo</th>
                                            <th>Nombre</th>
                                            <th>Alias</th>
                                            <th>Liga</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> 4</td>
                                            <td>X</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 6
                                            </td>
                                            <td>Win 98+</td>
                                            <td>6</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td>7</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td>6</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td>1.9</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.1</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.2</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.3</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.4</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.5</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>1.6</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td>125.5</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td>312.8</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td>419.3</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td>522.1</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td>420</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td>420.1</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td>413</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td>8.5</td>
                                            <td>C/A<sup>1</sup></td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td>3.1</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td>3.3</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td>3.5</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td>1</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td>1</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>A</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td>-</td>
                                            <td>X</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td>-</td>
                                            <td>C</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>U</td>
                                            <td><a href="<?= base_url('public/Img/escudo.png') ?>" data-toggle="lightbox"
                                                    data-title="sample 12 - black">
                                                    <img src="<?= base_url('public/Img/escudo.png') ?>"
                                                        class="img-fluid mb-2" alt="black sample"
                                                        style="max-width: 5rem;" />
                                                </a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                            <th>Imagen</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            <?php } ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>
<?= $this->section('jss'); ?>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js"></script>
<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });


        $('.btn[data-filter]').on('click', function () {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script>
<?= $this->endSection(); ?>