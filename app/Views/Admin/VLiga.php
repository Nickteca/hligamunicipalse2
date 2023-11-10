<?= $this->extend('Admin/Layauts/VMain'); ?>

<?= $this->section('title'); ?>
Inicio
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
                    <h1 class="m-0">Ligas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Ligas</li>
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
                    <div class="card elevation-4">
                        <div class="card-header">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                                <i class="icon fas fa-plus"></i> Agregar Liga
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                if (count($nligas) <= 0) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible">

                                        <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                        No hay liga registradas
                                    </div>
                                    <?php
                                } else {
                                    foreach ($nligas as $key => $value) {
                                        ?>
                                        <div class="col-lg-4 mb-2">
                                            <!--<div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-warning text-lg">
                                                         //$value['nombre_liga'] 
                                                    </div>
                                                </div>
                                                 //$value['descripcion_liga']
                                            </div>-->
                                            <a href="#">
                                                <div class="position-relative">
                                                    <img src="<?= base_url('public/Img/7754672-banner-de-fútbol.jpg') ?>"
                                                        alt="Photo 2" class="img-fluid">
                                                    <div class="ribbon-wrapper ribbon-xl">
                                                        <div class="ribbon bg-primary text-lg">

                                                            <?= $value['nombre_liga'] ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('admin/registro_liga') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <code> <?= session('errors.nombre_liga') ?></code>
                        <label for="nombre_liga">Nombre Liga</label>
                        <input type="text" name="nombre_liga" class="form-control" id="nombre_liga"
                            placeholder="Nombre de la liga">
                    </div>
                    <div class="form-group">
                        <code> <?= session('errors.descripcion_liga') ?></code>
                        <label for="descripcion_liga">Descripcion</label>
                        <input type="text" name="descripcion_liga" class="form-control" id="descripcion_liga"
                            placeholder="Escriba una breve descripcion, max 100 caracteres">
                    </div>
                    <div class="form-group">
                        <code> <?= session('errors.logo') ?></code>
                        <label for="exampleInputFile">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Elejir Imagen</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Cargar</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection(); ?>
<?= $this->section('jss'); ?>
<!-- bs-custom-file-input -->
<script
    src="<?= base_url() ?>vendor/almasaeed2010/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
    $(document).ready(function () {
        if (localStorage.getItem("errors.nombre_liga") !== null) {
            // La sesión existe
            console.log("La sesión existe");
        } else {
            // La sesión no existe
            console.log("La sesión no existe");
        }
        // Muestra el modal al cargar la página

    });
</script>
<?= $this->endSection() ?>