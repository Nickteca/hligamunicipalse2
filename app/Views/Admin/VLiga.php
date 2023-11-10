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
                                            <div
                                                class="callout <?= $retVal = ($key % 2 == 0) ? " callout-success " : "callout-danger"; ?>  shadow">
                                                <h5>
                                                    <a class="btn btn-primary text-light">
                                                        <?= $value['nombre_liga'] ?>
                                                    </a>
                                                </h5>
                                                <p>
                                                    <?= $value['descripcion_liga'] ?>
                                                </p>
                                                <img class="img-fuid" src="<?= base_url('public/Img/' . $value['logo']) ?>"
                                                    style="max-width: 18rem;">
                                            </div>
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
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
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