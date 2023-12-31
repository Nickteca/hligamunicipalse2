<?= $this->extend('Admin/Layauts/VMain'); ?>

<?= $this->section('title'); ?>
Inicio
<?= $this->endSection(); ?>
<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url() ?>vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
<?= $this->endSection(); ?>
<!-- Content Wrapper. Contains page content -->
<?= $this->section('content'); ?>

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
                                    <div class="col-lg-3 mb-2">
                                        <!--<div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-warning text-lg">
                                                         //$value['nombre_liga'] 
                                                    </div>
                                                </div>
                                                 //$value['descripcion_liga']
                                            </div>-->
                                        <a href="#">
                                            <div class="card shadow">
                                                <img src="<?= base_url('public/Img/' . $value['logo']) ?>" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <?= $value['nombre_liga'] ?>
                                                    </h5>
                                                    <p class="card-text">
                                                        <?= $value['descripcion_liga'] ?>
                                                    </p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"># Equipos:</li>
                                                    <li class="list-group-item"># Jornadas:</li>
                                                </ul>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?= base_url('admin/registro_liga') ?>">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <code> <?= session('errores') ?></code>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

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
                        <label for="logo">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="logo">
                                <label class="custom-file-label" for="exampleInputFile">Elejir Imagen</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Cargar</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
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

        var errorNombreLiga = <?php echo json_encode(session('errors.nombre_liga')); ?>;
        var errorDescripcionLiga = <?php echo json_encode(session('errors.descripcion_liga')); ?>;
        var errorLogoLiga = <?php echo json_encode(session('errors.logo')); ?>;
        var errorLiga = <?php echo json_encode(session('errores')); ?>;
        if (errorNombreLiga !== null || errorDescripcionLiga != null || errorLogoLiga != null || errorLiga != null) {
            console.log(errorNombreLiga);
            console.log(errorDescripcionLiga);
            console.log(errorLiga);
            console.log(errorLogoLiga);
            $('#modal-default').modal('show');
        }


    });
</script>
<?= $this->endSection() ?>