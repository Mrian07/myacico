</div><!-- /.content-wrapper -->

<footer class="main-footer">
	Hak cipta &copy; oleh MyACICO.com
</footer>
</div>

		<!-- s: back to top -->
		<a href="#0" class="cd-top" style='text-align: left'></a>
		<script src="<?php echo base_url('js/main.js');?>"></script>
		<!-- e: back to top -->
		
		<!-- s: alert action -->
		<script>
		$(document).ready(function() {
			$('#alertSubmit').show('slow').delay(5000).hide('slow');
				
		});	
		</script>  
		<!-- e: alert action -->

		<!-- s: date_picker -->
		<script type="text/javascript" src="<?php echo base_url('date_picker/js/bootstrap-datetimepicker.js');?>" charset="UTF-8"></script>
		<script type="text/javascript" src="<?php echo base_url('date_picker/js/bootstrap-datetimepicker.id.js');?>" charset="UTF-8"></script>
		<script type="text/javascript">
		 $('.form_date').datetimepicker({
				language:  'id',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
		</script>
		<!-- e: date_picker -->

		<!-- jQuery 2.1.4 -->
		<script src="<?php echo base_url('assets_adminlte/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?php echo base_url('assets_adminlte/js/jquery-ui.min.js') ?>"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo base_url('assets_adminlte/bootstrap/js/bootstrap.min.js') ?>"></script>
		<!-- Morris.js charts -->
		<script src="<?php echo base_url('assets_adminlte/bootstrap/js/raphael-min.js') ?>"></script>
		<script src="<?php echo base_url('assets_adminlte/plugins/morris/morris.min.js') ?>"></script>
		<!-- Sparkline -->
		<script src="<?php echo base_url('assets_adminlte/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
		<!-- jvectormap -->
		<script src="<?php echo base_url('assets_adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
		<script src="<?php echo base_url('assets_adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?php echo base_url('assets_adminlte/plugins/knob/jquery.knob.js') ?>"></script>
		<!-- daterangepicker -->
		<script src="<?php echo base_url('assets_adminlte/js/moment.min.js') ?>"></script>
		<script src="<?php echo base_url('assets_adminlte/plugins/daterangepicker/daterangepicker.js') ?>"></script>
		<!-- datepicker -->
		<script src="<?php echo base_url('assets_adminlte/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="<?php echo base_url('assets_adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
		<!-- Slimscroll -->
		<script src="<?php echo base_url('assets_adminlte/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url('assets_adminlte/plugins/fastclick/fastclick.min.js') ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url('assets_adminlte/dist/js/app.min.js') ?>"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo base_url('assets_adminlte/dist/js/pages/dashboard.js') ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url('assets_adminlte/dist/js/demo.js') ?>"></script>
		
		<!-- s: ckeditor -->
		<script src="<?php echo base_url('ckeditor/ckeditor.js') ?>"></script>
		<script src="<?php echo base_url('ckeditor/samples/js/sample.js') ?>"></script>

		<script>
			initSample();
		</script>
		<!-- e: ckeditor -->
		
    </body>
</html>