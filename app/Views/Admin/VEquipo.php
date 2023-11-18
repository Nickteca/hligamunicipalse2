<?= $this->extend('Admin/Layauts/VMain'); ?>

<?= $this->section('title'); ?>
Equipos
<?= $this->endSection(); ?>
<?= $this->section('css'); ?>
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url() ?>vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
<!-- DataTables -->
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css">
<link rel="stylesheet"
    href="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<?= $this->endSection(); ?>

<!-- Content Wrapper. Contains page content -->
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
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
                                                data-placeholder="Selecciona liga"
                                                data-dropdown-css-class="select2-purple" style="width: 100%;" required>
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
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <code> <?= session('errors.nombre_corto') ?></code>
                                    <label>Nombre Corto</label>
                                    <div class="input-group">
                                        <input type="text" value="<?= old('nombre_corto') ?>" name="nombre_equipo"
                                            class="form-control" placeholder="Nombre Equipo">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-star"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <code> <?= session('errors.logo') ?></code>
                                        <label for="logo">Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="logo" class="custom-file-input" id="logo">
                                                <label class="custom-file-label" for="exampleInputFile">Elejir
                                                    Imagen</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Cargar</span>
                                            </div>
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
                <div
                    class="card <?= $retVal = (count($nequipos) <= 0) ? 'card_danger' : 'caqrd-primary'; ?> card-danger shadow-lg">
                    <div class="card-header">
                        <h3 class="card-title">Equipos registrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if (count($nequipos) <= 0) {
                            ?>
                            <div class="alert alert-danger alert-dismissible">

                                <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                No hay Equipos registradas
                            </div>
                            <?php
                        } else { ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>LOGO</th>
                                        <th>NOMBRE</th>
                                        <th>ALIAS</th>
                                        <th>ACCIONE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($nequipos as $key => $value) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $value['id_equipo']; ?>
                                            </td>
                                            <td>
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1"
                                                    data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                    <img src="https://via.placeholder.com/300/FFFFFF?text=1"
                                                        class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </td>
                                            <td>
                                                <?= $value['nombre_equipo']; ?>
                                            </td>
                                            <td>
                                                <?= $value['alias']; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-app">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>LOGO</th>
                                        <th>NOMBRE</th>
                                        <th>ALIAS</th>
                                        <th>ACCIONE</th>
                                    </tr>
                                </tfoot>
                            </table>
                        <?php } ?>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- /.content-wrapper -->
<?= $this->endSection(); ?>
<?= $this->section('jss'); ?>
<!-- bs-custom-file-input -->
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
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
        $('.select2').select2({
            placeholder: 'selecciona Ligas'
        });
        $(function () {
            bsCustomFileInput.init();
        });
    });
</script>
<?= $this->endSection(); ?>