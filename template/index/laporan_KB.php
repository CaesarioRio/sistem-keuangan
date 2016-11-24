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
				
				<div class="container padding-left-30 padding-right-30 padding-top-30">
					<div class="row">
						<div class="col-sm-3 col-xs-3">
							<h5 class="over-title margin-bottom"> Laporan <span class="text-bold">Bank Harian</span></h5>
						</div>
						<div class="col-sm-3 col-xs-0"></div>
						<div class="pull-right">
							Sort By
							<div class="btn-group">
								<button type="button" class="btn btn-light-grey">
									Tanggal Input
								</button>
								<button type="button" class="btn btn-light-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<span class="fa fa-angle-down"></span>
								</button>
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
						<div class="col-sm-3 col-xs-12 pull-right margin-bottom-20">
							<span class="input-icon input-icon-right">
								<input type="text" placeholder="Search..." id="form-field-17" class="form-control">
								<i class="fa fa-search"></i>
							</span>
						</div>
					</div>
					<div class="row margin-bottom">
						<div class="panel panel-white">
							<div class="panel-body">
								<div class="table margin-bottom-25">
									<div class="row">
										<div class="pull-right margin-bottom-5 padding-right-20">
											<a class="btn btn-primary btn-o btn-wide tombol">Export </a>
											<i class="fa fa-calendar padding-left-20"></i> Senin, 10 November 2015
										</div>
									</div>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th class="paddings">Tanggal Input</th>
												<th class="paddings">No. Bukti</th>
												<th class="paddings">Tanggal Kwitansi</th>
												<th class="paddings">Keterangan</th>
												<th class="paddings">No. Perk</th>
												<th class="paddings">Penerimaan</th>
												<th class="paddings">Pengeluaran</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">Biaya materai - lunas bea materai desmber 2015</td>
												<td class="paddings text center">750</td>
												<td></td>
												<td class="paddings text-right padding-right-5">6.288</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">Biaya Adm</td>
												<td class="paddings text center">738</td>
												<td></td>
												<td class="paddings text-right padding-right-5">7.145</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">setor pb - pb danton</td>
												<td class="paddings text center">180</td>
												<td class="paddings text-right padding-right-5">175.000.000</td>
												<td class="paddings text-right padding-right-5"></td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">DN lainnya - by pu valas</td>
												<td class="paddings text center">602.6</td>
												<td></td>
												<td class="paddings text-right padding-right-5">428.700</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">DN utk llg - Bank Of America rseller club</td>
												<td class="paddings text center">141</td>
												<td></td>
												<td class="paddings text-right padding-right-5">140.000.000</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">pajak jasa giro</td>
												<td class="paddings text center">802</td>
												<td></td>
												<td class="paddings text-right padding-right-5">280</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">jasa giro</td>
												<td class="paddings text center">802</td>
												<td></td>
												<td class="paddings text-right padding-right-5">1.680</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Saldo kas terdiri dari</td>
												<td colspan="2" class="paddings">Jumlah</td>
												<td class="paddings text-right padding-right-5">175.001.680</td>
												<td class="paddings text-right padding-right-5">140.442.413</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Uang Tunai</td>
												<td colspan="2" class="paddings">Saldo Awal</td>
												<td class="paddings text-right padding-right-5">23.051.974</td>
												<td></td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Ch/GB Ph III</td>
												<td colspan="2" class="paddings">Saldo Akhir</td>
												<td class="paddings text-right padding-right-5">57.611.241</td>
												<td class="paddings text-right padding-right-5"></td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Ch/GB Titipan</td>
												<td colspan="2" class="paddings">Kontrol</td>
												<td class="paddings text-right padding-right-5">198.053.654</td>
												<td class="paddings text-right padding-right-5">198.053.654</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Ch/GB Tolakan</td>
												<td colspan="4" class="paddings"></td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Bon Sementara</td>
												<td rowspan="4" colspan="2" class="text-center">Pimpinan</td>
												<td rowspan="4" class="text-center">Kontroler</td>
												<td rowspan="4" class="text-center">Kasir</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Sisa Keuangan</td>
												
											</tr>
											<tr>
												<td colspan="3" class="paddings">Saldo Kas untuk Disetor</td>
												
											</tr>
											<tr>
												<td colspan="3" class="paddings">Beda Kas</td>
												
											</tr>
										</tbody>
									</table>
									<div class="pull-right margin-bottom-25">
									<a href="input_KH.php" class="btn btn-primary btn-wide btn-o">Update</a>
									<a href="input_KH.php" class="btn btn-primary btn-wide">Delete</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row margin-bottom">
						<div class="panel panel-white">
							<div class="panel-body">
								<div class="table margin-bottom-25">
									<div class="row">
										<div class="pull-right margin-bottom-5 padding-right-20">
											<a class="btn btn-primary btn-o btn-wide tombol">Export </a>
											<i class="fa fa-calendar padding-left-20"></i> Senin, 10 November 2015
										</div>
									</div>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th class="paddings">Tanggal Input</th>
												<th class="paddings">No. Bukti</th>
												<th class="paddings">Tanggal Kwitansi</th>
												<th class="paddings">Keterangan</th>
												<th class="paddings">No. Perk</th>
												<th class="paddings">Penerimaan</th>
												<th class="paddings">Pengeluaran</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">Biaya materai - lunas bea materai desmber 2015</td>
												<td class="paddings text center">750</td>
												<td></td>
												<td class="paddings text-right padding-right-5">6.288</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">Biaya Adm</td>
												<td class="paddings text center">738</td>
												<td></td>
												<td class="paddings text-right padding-right-5">7.145</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">setor pb - pb danton</td>
												<td class="paddings text center">180</td>
												<td class="paddings text-right padding-right-5">175.000.000</td>
												<td class="paddings text-right padding-right-5"></td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">DN lainnya - by pu valas</td>
												<td class="paddings text center">602.6</td>
												<td></td>
												<td class="paddings text-right padding-right-5">428.700</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">DN utk llg - Bank Of America rseller club</td>
												<td class="paddings text center">141</td>
												<td></td>
												<td class="paddings text-right padding-right-5">140.000.000</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">pajak jasa giro</td>
												<td class="paddings text center">802</td>
												<td></td>
												<td class="paddings text-right padding-right-5">280</td>
											</tr>
											<tr>
												<td class="paddings text-right padding-right-5">04/01/2016</td>
												<td></td>
												<td class="paddings text-right padding-right-5">02/01/2016</td>
												<td class="paddings">jasa giro</td>
												<td class="paddings text center">802</td>
												<td></td>
												<td class="paddings text-right padding-right-5">1.680</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Saldo kas terdiri dari</td>
												<td colspan="2" class="paddings">Jumlah</td>
												<td class="paddings text-right padding-right-5">175.001.680</td>
												<td class="paddings text-right padding-right-5">140.442.413</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Uang Tunai</td>
												<td colspan="2" class="paddings">Saldo Awal</td>
												<td class="paddings text-right padding-right-5">23.051.974</td>
												<td></td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Ch/GB Ph III</td>
												<td colspan="2" class="paddings">Saldo Akhir</td>
												<td class="paddings text-right padding-right-5">57.611.241</td>
												<td class="paddings text-right padding-right-5"></td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Ch/GB Titipan</td>
												<td colspan="2" class="paddings">Kontrol</td>
												<td class="paddings text-right padding-right-5">198.053.654</td>
												<td class="paddings text-right padding-right-5">198.053.654</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Ch/GB Tolakan</td>
												<td colspan="4" class="paddings"></td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Bon Sementara</td>
												<td rowspan="4" colspan="2" class="text-center">Pimpinan</td>
												<td rowspan="4" class="text-center">Kontroler</td>
												<td rowspan="4" class="text-center">Kasir</td>
											</tr>
											<tr>
												<td colspan="3" class="paddings">Sisa Keuangan</td>
												
											</tr>
											<tr>
												<td colspan="3" class="paddings">Saldo Kas untuk Disetor</td>
												
											</tr>
											<tr>
												<td colspan="3" class="paddings">Beda Kas</td>
												
											</tr>
										</tbody>
									</table>
									<div class="pull-right margin-bottom-25">
									<a href="input_KH.php" class="btn btn-primary btn-wide btn-o">Update</a>
									<a href="input_KH.php" class="btn btn-primary btn-wide">Delete</a>
									</div>
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