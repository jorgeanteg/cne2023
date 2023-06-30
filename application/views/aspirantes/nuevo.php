<style>
    select option {
        color: #495057;
    }
</style>



<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <h1>NUEVO ASPIRANTE</h1>
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5>Datos de los Aspirantes</h5>
                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    </div>
                    <div class="card-block">
                        <form class="" action="<?php echo site_url(); ?>/aspirantes/guardar" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Dignidad:</label>
                                    <br>

                                    <select class="form-select" type="text" name="dignidad_asp" id="dignidad_asp">
                                        <option selected disabled>Selecione una dignidad</option>
                                        <option value="Presidente">Presidente</option>
                                        <option value="Asambleísta Nacional">Asambleísta Nacional</option>
                                        <option value="Asambleísta Provincial">Asambleísta Provincial</option>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label for="">Cédula:</label>
                                    <br>
                                    <input type="number" placeholder="Ingrese la cédula" class="form-control"
                                        name="cedula_asp" value="" id="cedula_asp" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Apellidos:</label>
                                    <br>
                                    <input type="text" placeholder="Ingrese sus apellidos" class="form-control"
                                        name="apellidos_asp" value="" id="apellidos_asp" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nombres:</label>
                                    <br>
                                    <input type="text" placeholder="Ingrese los nombres" class="form-control"
                                        name="nombres_asp" value="" id="nombres_asp" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="">Título:</label>
                                    <br>
                                    <input type="text" placeholder="Ingrese el titulo" class="form-control"
                                        name="titulo_asp" value="" id="titulo_asp" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Movimiento:</label>
                                    <br>

                                    <select required class="form-select" type="text" name="movimiento_asp" id="movimiento_asp">
                                        <option selected disabled>Selecione un movimiento político</option>
                                        <option value="Movimiento Centro Democrático Nacional">Movimiento Centro
                                            Democrático Nacional (CD), lista 1.</option>
                                        <option value="Partido Unidad Popular (UP), lista 2.">Partido Unidad Popular
                                            (UP), lista 2.</option>
                                        <option value="Partido Sociedad Patriótica 21 de Enero, lista 3.">Partido
                                            Sociedad Patriótica 21 de Enero, lista 3.</option>
                                        <option value="Movimiento Pueblo Igualdad Democracia (PID), lista 4.">Movimiento
                                            Pueblo Igualdad Democracia (PID), lista 4.</option>
                                        <option value="Movimiento Político Revolución Ciudadana (RC), lista 5.">
                                            Movimiento Político Revolución Ciudadana (RC), lista 5.</option>
                                        <option value="Partido Social Cristiano (PSC), lista 6.">Partido Social
                                            Cristiano (PSC), lista 6.</option>
                                        <option value="Partido Político Avanza, lista 8.">Partido Político Avanza, lista
                                            8.</option>
                                        <option value="Partido Izquierda Democrática (ID), lista 12.">Partido Izquierda
                                            Democrática (ID), lista 12.</option>
                                        <option value="Movimiento Acción Movilizadora (Amigo), lista 16.">Movimiento
                                            Acción Movilizadora (Amigo), lista 16.</option>
                                        <option value="Partido Socialista Ecuatoriano, lista 17.">Partido Socialista
                                            Ecuatoriano, lista 17.</option>
                                        <option value="Movimiento Plurinacional Pachakutik (PK), lista 18.">Movimiento
                                            Plurinacional Pachakutik (PK), lista 18.</option>
                                        <option value="Movimiento Democracia Sí, lista 20.">Movimiento Democracia Sí,
                                            lista 20.</option>
                                        <option value="Movimiento Creando Oportunidades (CREO), lista 21.">Movimiento
                                            Creando Oportunidades (CREO), lista 21.</option>
                                        <option value="Partido Sociedad Unida Más Acción (SUMA), lista 23.">Partido
                                            Sociedad Unida Más Acción (SUMA), lista 23.</option>
                                        <option value="Movimiento Construye, lista 25.">Movimiento Construye, lista 25.
                                        </option>
                                        <option value="Movimiento Renovación Total (RETO), lista 33.">Movimiento
                                            Renovación Total (RETO), lista 33. Provincial</option>
                                        <option value="Movimiento Revolucionario, Democrático, lista 35.">Movimiento
                                            Revolucionario, Democrático, lista 35.</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tipo de Movimiento:</label>
                                    <br>
                                    <select class="form-select" type="text" name="tipo_asp" id="tipo_asp">
                                        <option selected disabled>Selecione una tipo de Movimiento</option>
                                        <option value="Izquierda">Izquierda</option>
                                        <option value="Derecha">Derecha</option>
                                    </select>

                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for=""><strong>Dirección</strong></label>
                                </div>

                                <br>
                                <div class="col-md-6">
                                    <label for="">Latitud:</label>
                                    <br>
                                    <input type="number" placeholder="Ingrese la direccion" class="form-control"
                                    readonly name="latitud_asp" value="" id="latitud_asp">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Longitud:</label>
                                    <br>
                                    <input type="number" placeholder="Ingrese la direccion" class="form-control"
                                        readonly name="longitud_asp" value="" id="longitud_asp">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <div id="mapaUbicacion" style="height:350px; width:100%; border:2px solid black;">

                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="button" class="btn btn-primary">
                                        Guardar
                                    </button>
                                    &nbsp;
                                    <a href="<?php echo site_url(); ?>/aspirantes/listado" class="btn btn-danger">
                                        Cancelarz
                                    </a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script type="text/javascript">
    function initMap() {
        //Crear el punto central del mapa
        var centro = new google.maps.LatLng(-1.6654563910937459, -78.66144701362455);

        //Creando mapa
        //Tipos de mapa
        //SATELLITE
        //TERRAIN
        var mapa1 = new google.maps.Map(document.getElementById('mapaUbicacion'),
            { center: centro, zoom: 6, mapTypeId: google.maps.MapTypeId.HYBRID });


        var marcador = new google.maps.Marker(
            {
                position: centro,
                map: mapa1,
                title: "Seleccione la dirección",
                icon: "<?php echo base_url(); ?>/assets/img/icon2.png",
                draggable: true

            });

            google.maps.event.addListener(marcador, 'dragend', function(){
                // alert("Se termino el drag");
                document.getElementById('latitud_asp').value=this.getPosition().lat();
                document.getElementById('longitud_asp').value=this.getPosition().lng();
            });
    }
</script>