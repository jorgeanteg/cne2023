<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <h1>LISTADO DE ASPIRANTES</h1>
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5>Listado de los aspirantes</h5>
                        <span>
                            <div class="col-md-4 ">
                                <a href="<?php echo site_url(); ?>/aspirantes/nuevo" class="btn btn-primary">
                                    <i class="ti-plus"></i>
                                    Nuevo Aspirante
                                </a>
                            </div>
                        </span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <?php if ($aspirantes): ?>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DIGNIDAD</th>
                                            <th>CÉDULA</th>
                                            <th>APELLIDOS</th>
                                            <th>NOMBRES</th>
                                            <th>TÍTULO</th>
                                            <th>MOVIMIENTO</th>
                                            <th>TIPO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php foreach ($aspirantes as $filaTemporal): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $filaTemporal->id_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->dignidad_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->cedula_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->apellidos_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->nombres_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->titulo_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->movimiento_asp; ?>
                                                </td>
                                                <td>
                                                    <?php echo $filaTemporal->tipo_asp; ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" title="Editar Aspirante" style="color:blue;">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="<?php echo site_url(); ?>/aspirantes/eliminar/<?php echo $filaTemporal->id_asp; ?>"
                                                        title="Eliminar Aspirantes"
                                                        onclick="return confirm('¿Está seguro de eliminar este registro?');"
                                                        style="color:red;">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>


                                </table>

                            <?php else: ?>
                                <h1>No hay Aspirantes</h1>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>