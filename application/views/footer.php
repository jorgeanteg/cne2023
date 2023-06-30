</div>
</div>
</div>
</div>

<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata("confirmacion"); ?>",'',{"positionClass":"toast-bottom-right"});
  </script>
  <?php   $this->session->set_flashdata("confirmacion","") ?>
<?php endif; ?>

<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata("error"); ?>");
  </script>
  <?php   $this->session->set_flashdata("error","") ?>
<?php endif; ?>


<!-- Required Jquery -->
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/plantilla/assets/js/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/pages/widget/excanvas.js "></script>
<!-- waves js -->
<script src="<?php echo base_url(); ?>/plantilla/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->

<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/js/modernizr/modernizr.js "></script>

<!-- Chart js -->
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="<?php echo base_url(); ?>/plantilla/assets/pages/widget/amchart/gauge.js"></script>
<script src="<?php echo base_url(); ?>/plantilla/assets/pages/widget/amchart/serial.js"></script>
<script src="<?php echo base_url(); ?>/plantilla/assets/pages/widget/amchart/light.js"></script>
<!-- <script src="<?php echo base_url(); ?>/plantilla/assets/pages/widget/amchart/pie.min.js"></script> -->
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="<?php echo base_url(); ?>/plantilla/assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url(); ?>/plantilla/assets/js/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript"
        src="<?php echo base_url(); ?>/plantilla/assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/assets/js/script.js "></script>
<!-- Importacion de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

<footer class="text-white py-4">

        <p class="Titulo-final text-center">&copy;CNE-2023. Todos los Derechos reservados</p>

</footer>

</body>

</html>