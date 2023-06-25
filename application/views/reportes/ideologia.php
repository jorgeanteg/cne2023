<style>
    .card-block {
        padding: 0px;
    }
</style>

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <h1>Geolocalización Tipo de Movimiento</h1>
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <a href="<?php echo site_url(); ?>/reportes/presidentes">
                                            <h4 class="text-c-red">Izquierda</h4>
                                            <h6 class="text-muted m-b-0">Ideología</h6>
                                        </a>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="<?php echo site_url(); ?>/reportes/presidentes">
                                            <i class="ti-location-pin"
                                                style="font-size: 40px; color: #ff0000; font-weight: 700;"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-12 text-center">
                                        <p class="text-white m-b-0">Elecciones 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">Derecha</h4>
                                        <h6 class="text-muted m-b-0">Ideología</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="ti-location-pin"
                                            style="font-size: 40px; color: blue; font-weight: 700;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-12 text-center">
                                        <p class="text-white m-b-0">Elecciones 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Basic map start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Ideología de los Movimientos</h5>
                                <span>Se presenta las Ideologías de los Movimientos</span>
                            </div>
                            <div class="card-block">
                                <div id="mapaTipo" class="set-map" style="height:500px; width:100%;">
                                </div>
                            </div>
                        </div>
                        <!-- Basic map end -->
                    </div>

                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
</div>



<script type="text/javascript">
    function initMap() {
        //Crear el punto central del mapa
        var centro = new google.maps.LatLng(-0.9177264322536244, -78.63301799183898);

        //Creando mapa
        //Tipos de mapa
        //SATELLITE
        //TERRAIN
        var mapaTipo = new google.maps.Map(document.getElementById('mapaTipo'),
            { center: centro, zoom: 7, mapTypeId: google.maps.MapTypeId.HYBRID });

        //Marcador 


        //$lugares viene desde el controlador

        <?php if ($izquierda): ?>
            <?php foreach ($izquierda as $lugarTemporal): ?>

                var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_asp; ?>, <?php echo $lugarTemporal->longitud_asp; ?>);

                var marcadorTemporal = "<?php echo $lugarTemporal->nombres_asp; ?>         <?php echo $lugarTemporal->apellidos_asp; ?> / <?php echo $lugarTemporal->tipo_asp; ?> ";

                var marcador = new google.maps.Marker(
                    {
                        position: coordenadaTemporal,
                        title: marcadorTemporal,
                        map: mapaTipo,
                        icon: "<?php echo base_url(); ?>/assets/img/icon3.png"

                    });
            <?php endforeach; ?>

        <?php endif; ?>

        <?php if ($derecha): ?>
            <?php foreach ($derecha as $lugarTemporal): ?>

                var coordenadaTemporal = new google.maps.LatLng(<?php echo $lugarTemporal->latitud_asp; ?>, <?php echo $lugarTemporal->longitud_asp; ?>);

                var marcadorTemporal = "<?php echo $lugarTemporal->nombres_asp; ?>         <?php echo $lugarTemporal->apellidos_asp; ?> / <?php echo $lugarTemporal->tipo_asp; ?> ";

                var marcador = new google.maps.Marker(
                    {
                        position: coordenadaTemporal,
                        title: marcadorTemporal,
                        map: mapaTipo,
                        icon: "<?php echo base_url(); ?>/assets/img/icon1.png"


                    });
            <?php endforeach; ?>

        <?php endif; ?>

    }

</script>