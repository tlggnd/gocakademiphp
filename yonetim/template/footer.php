		
			</div>
</div>	

		
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer ">
			<p class="mb-0">Tüm Hakları Saklıdır. Uzman Dijital Ajans</p>
		</footer>
	</div>
	<!--end wrapper-->



	<!-- Bootstrap JS -->
	<script src="./assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="./assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="./assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="./assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="./assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="./assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="./assets/js/index.js"></script>
	<!--app JS-->
	<script src="./assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
		<!-- Bootstrap JS -->
	<script src="./assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="./assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="./assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="./assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="./assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	
	
	<script>
		$(document).ready(function() {
			$('#example').DataTable(
			  
			  );
			$("div.dataTables_filter input").focus();
		  } );
	</script>
	
	
	<script>
	  
	  $(document).ready(function() {
	  $('#example').DataTable()
	});
	  
	</script>
	
	
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="./assets/js/app.js"></script>
</body>

</html>