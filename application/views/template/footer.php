  <!-- Main Footer -->
  <footer class="main-footer">
  	<strong>Copyright &copy; 2021</strong>
  	Annkazh.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- Bootstrap -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- Pace -->
<script src="<?= base_url('assets/plugins/pace-progress/pace.min.js'); ?>"></script>
<!-- SweetAlert -->
<script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js'); ?>"> </script>
<!-- DateRange Picker -->
<script src="<?= base_url('assets/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js"'); ?>"> </script>
<!-- Select2 -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>
<script>
	$(document).ready(function() {
		toastr.options = {
		  "debug": false,
		  "positionClass": "toast-bottom-right",
		  "onclick": null,
		  "fadeIn": 300,
		  "fadeOut": 1000,
		  "timeOut": 5000,
		  "extendedTimeOut": 1000
		}

		$('.tanggal').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			locale: {
				format: 'YYYY-MM-DD'
			}
		});

		$('.tanggalWaktu').daterangepicker({
			singleDatePicker: true,
			timePickerIncrement: 1,
			showDropdowns: true,
			minYear: 1901,
			timePicker: true,
			locale: {
				format: 'YYYY-MM-DD HH:MM:SS'
			}
		});

		$('.select2').select2({
			maximumSelectionLength: 3
		});
		
		$('.angka').keyup(function () { 
        this.value = this.value.replace(/[^0-9\.]/g,'');
      });
});
</script>
</body>
</html>