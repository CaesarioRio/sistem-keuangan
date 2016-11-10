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
					<a href="index.php"><h4 class="mainTitle no-margin">Dashboard</h4></a>
					<h5>Welcome to Beon Accounting</h5>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				
				<div class="container-fluid padding-bottom-10 padding-top-30">
					<div class="row">
						<div class="panel-heading">
							<div class="col-sm-6">
								<h5 class="margin-top-5">Laporan <span class="text-bold">Kas Harian</span></h5>
							</div>
							<div class="col-sm-6">
								<div class="col-sm-12">
									<div class="col-sm-9">
									<h5 class="margin-top-5 text-right"><span class="text-bold">Sort by</span></h5>
									</div>
									<div class="col-sm-3">
									<div class="btn-group margin-bottom-10">
												<a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Tanggal Input <span class="caret"></span> </a>
												<ul role="menu" class="dropdown-menu dropdown-light pull-right">
													<li>
														<a href="#"> Action </a>
													</li>
													<li>
														<a href="#"> Another action </a>
													</li>
													<li>
														<a href="#"> Something else here </a>
												</li>
											</ul>
										</div>
									</div>	
								</div>
							</div>
							</div>
							<h5 class="margin-top-5 text-right margin-right-10 margin-top-20"><span class="text-bold">10 November 2016</span></h5>													
					</div>
					<div class="row margin-bottom">
						<div class="panel panel-white">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="odd">
												<th colspan="7" class="text-center">Laporan Kas Harian</th>
											</tr>
											<tr>
												<th>Tanggal Input</th>
												<th>No. Bukti</th>
												<th>Tanggal Kwitansi</th>
												<th>Keterangan</th>
												<th>No. Perk</th>
												<th>Penerimaan</th>
												<th>Pengeluaran</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td colspan="3">Saldo kas terdiri dari<input type="text" class="form-control no-border"></td>
												<td colspan="2">Jumlah<input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td colspan="3">Uang Tunai<input type="text" class="form-control no-border"></td>
												<td colspan="2">Saldo Awal<input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td colspan="3">Ch/GB Ph III<input type="text" class="form-control no-border"></td>
												<td colspan="2">Saldo Akhir<input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td colspan="3">Ch/GB Titipan<input type="text" class="form-control no-border"></td>
												<td colspan="2">Kontrol<input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td colspan="3">Ch/GB Tolakan<input type="text" class="form-control no-border"></td>
												<td colspan="4"></td>
											</tr>
											<tr>
												<td colspan="3">Bon Sementara<input type="text" class="form-control no-border"></td>
												<td rowspan="4" colspan="2" class="text-center">Pimpinan<input type="text" class="form-control no-border"></td>
												<td rowspan="4" class="text-center">Kontroler<input type="text" class="form-control no-border"></td>
												<td rowspan="4" class="text-center">Kasir<input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td colspan="3">Sisa Keuangan<input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td colspan="3">Saldo Kas untuk Disetor<input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td colspan="3">Beda Kas<input type="text" class="form-control no-border"></td><input type="text" class="form-control no-border">
												
											</tr>
										</tbody>
									</table>
								</div>
								<div class="pull-right">
									<a href="input_KH.php" class="btn btn-primary btn-wide margin-top-10">Update</a>
									<a href="input_KH.php" class="btn btn-primary btn-wide btn-o margin-top-10">Delete</a>
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