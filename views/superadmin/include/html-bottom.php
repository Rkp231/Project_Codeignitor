<!--
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
-->

<script src="<?php echo base_url(); ?>/assets/superadmin/assets/js/master/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/superadmin/assets/js/master/bootstrap.min.js"></script>



<!--   Core JS Files
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/core/jquery.3.2.1.min.js"></script>  -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Dropzone -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/dropzone/dropzone.min.js"></script>

<!-- Fullcalendar -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

<!-- DateTimePicker -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap Tagsinput -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<!-- Bootstrap Wizard -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

<!-- jQuery Validation -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/select2/select2.full.min.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Owl Carousel -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

<!-- Magnific Popup -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/setting-demo.js"></script>

<script src="<?php echo base_url(); ?>assets/superadmin/assets/js/demo.js"></script>
<script>
  Circles.create({
    id:'circles-1',
    radius:45,
    value:60,
    maxValue:100,
    width:7,
    text: <?php echo $this->msuperadmin->count_listapplicationformlist(); ?>,
    colors:['#f1f1f1', '#FF9E27'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
  })

  Circles.create({
    id:'circles-2',
    radius:45,
    value:70,
    maxValue:100,
    width:7,
    text: <?php echo $this->msuperadmin->count_listdownloadbroucherslist(); ?>,
    colors:['#f1f1f1', '#2BB930'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
  })

  Circles.create({
    id:'circles-3',
    radius:45,
    value:40,
    maxValue:100,
    width:7,
    text: 0,
    colors:['#f1f1f1', '#F25961'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
  })

  var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

  var mytotalIncomeChart = new Chart(totalIncomeChart, {
    type: 'bar',
    data: {
      labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
      datasets : [{
        label: "Total Income",
        backgroundColor: '#ff9e27',
        borderColor: 'rgb(23, 125, 255)',
        data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false,
      },
      scales: {
        yAxes: [{
          ticks: {
            display: false //this will remove only the label
          },
          gridLines : {
            drawBorder: false,
            display : false
          }
        }],
        xAxes : [ {
          gridLines : {
            drawBorder: false,
            display : false
          }
        }]
      },
    }
  });

  $('#lineChart').sparkline([105,103,123,100,95,105,115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: '#ffa534',
    fillColor: 'rgba(255, 165, 52, .14)'
  });
</script>


<script >
  $(document).ready(function() {
    $('#basic-datatables').DataTable({
    });
  });
</script>


</body>
</html>
