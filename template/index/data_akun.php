<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	<title>Packet - Responsive Admin Template</title>
	<?php include 'include/main-head.php'; ?>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="assets/css/rio.css">
</head>
<!-- end: HEAD -->
<body>
<div id="app" class="lyt-2">
	<!-- sidebar -->
	<?php include 'include/sidebar.php'; ?>
	<!-- / sidebar -->
	<div class="app-content">
		<!-- start: TOP NAVBAR -->
		<?php include 'include/nav-header.php'; ?>
		<!-- end: TOP NAVBAR -->
		<div class="main-content" >
			<div class="wrap-content container" id="container">
				<!-- start: BREADCRUMB -->
				<div class="breadcrumb-wrapper">
					<a href="index.php"><h4 class="mainTitle no-margin"><i class="fa fa-angle-left"></i> Back to Dashboard</h4></a>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				<div class="container padding-left-30 padding-right-30 padding-top-15">
					<div class="row">
						<div class="panel-heading"><h5 class="over-title margin-bottom"> Data <span class="text-bold">Akun</span></h5></div>
					</div>
				</div>
				<div class="container-fluid padding-bottom-10">
					<div class="row">
						<div class="col-sm-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-tambah-data">
								Tambah Data
							</button>
							<button type="button" class="btn btn-primary">
								Export
							</button>
						</div>
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
							<span class="input-icon input-icon-right">
								<input type="text" placeholder="Search..." id="form-field-17" class="form-control">
								<i class="fa fa-search"></i>
							</span>
						</div>
						<div class="col-sm-12">
							<div class="panel panel-white no-radius margin-top-10">
								<div class="panel-body padding-top-10 padding-bottom-50">
									<div class="table-responsive padding-10">
										<table class="table">
											<thead>
												<td>No</td>
												<td>No. Akun</td>
												<td>Nama Akun</td>
												<td class="text-center">Action</td>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>306</td>
													<td>Piutang Hartono</td>
													<td class="text-center">
														<button type="button" class="btn btn-warning">
															Edit
														</button>
														<button type="button" class="btn btn-danger">
															Delete
														</button>
													</td class="text-center">
												</tr>
												<tr>
													<td>2</td>
													<td>245</td>
													<td>Pembayaran Hadi</td>
													<td class="text-center">
														<button type="button" class="btn btn-warning">
															Edit
														</button>
														<button type="button" class="btn btn-danger">
															Delete
														</button>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>132</td>
													<td>Peminjaman PT> Tercinta</td>
													<td class="text-center">
														<button type="button" class="btn btn-warning">
															Edit
														</button>
														<button type="button" class="btn btn-danger">
															Delete
														</button>
													</td>
												</tr>
												</tbody>
											
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- start: FOOTER -->
	<?php include 'include/footer.php'; ?>
	<!-- end: FOOTER -->
	<!-- start: OFF-SIDEBAR -->
	<?php include 'include/off-sidebar.php'; ?>
	<!-- end: OFF-SIDEBAR -->
	<!-- start: SETTINGS -->
	<?php include 'include/settings-panel.php'; ?>
	<!-- end: SETTINGS -->

</div>
<!-- start: MAIN JAVASCRIPTS -->
<?php include 'include/main-js.php'; ?>
<!-- start: JavaScript Event Handlers for this page -->
<?php include 'modal/tambah-data.php'; ?>
<script src="assets/js/index.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		Index.init();
	});
</script>
<script>
	var textAreas = document.getElementsByTagName('textarea');

	Array.prototype.forEach.call(textAreas, function(elem) {
		elem.placeholder = elem.placeholder.replace(/\\n/g, '\n');
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>