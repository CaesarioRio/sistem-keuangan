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
	<link rel="stylesheet" href="assets/css/ariq.css">
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
							<h5 class="over-title margin-bottom"><span class="text-bold">Jurnal Umum</span></h5>
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
								<div class="table">
									<div class="row">
										<div class="pull-right margin-bottom-5 padding-right-20">
											<a class="btn btn-primary btn-o btn-wide tombol">Export </a>
											<i class="fa fa-calendar padding-left-20"></i> Senin, 10 November 2015
										</div>
									</div>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th colspan="2" class="paddings text-center kojur">Kode</th>
												<th class="paddings text-center">Uraian</th>
												<th class="paddings text-center">D</th>
												<th class="paddings text-center">K</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="paddings"></td>
												<td class="paddings"></td>
												<td class="paddings text-center">1</td>
												<td class="paddings"></td>
												<td class="paddings"></td>
											</tr>
											<tr>
												<td class="paddings text-center">746</td>
												<td class="paddings"></td>
												<td class="paddings">By penyusutan gedung</td>
												<td class="paddings text-right padding-right-5">Rp16,732,742</td>
												<td class="paddings"></td>
											</tr>
											<tr>
												<td class="paddings text-center">747</td>
												<td class="paddings"></td>
												<td class="paddings">By penyusutan inventaris kantor</td>
												<td class="paddings text-right padding-right-5">Rp11,628,686</td>
												<td class="paddings"></td>
											</tr>
											<tr>
												<td class="paddings text-center">602.12</td>
												<td class="paddings"></td>
												<td class="paddings">By penyusutan perangkat</td>
												<td class="paddings text-right padding-right-5">Rp62,545,031</td>
												<td class="paddings text-right"></td>
											</tr>
											<tr>
												<td class="paddings text-center">748</td>
												<td class="paddings"></td>
												<td class="paddings">By penyusutan perangkat pendukung</td>
												<td class="paddings text-right padding-right-5">Rp1,345,436</td>
												<td class="paddings text-right"></td>
											</tr>
											<tr>
												<td class="paddings text-center">749</td>
												<td class="paddings"></td>
												<td class="paddings">By penyusutan kendaraan</td>
												<td class="paddings text-right padding-right-5">Rp6,519,241</td>
												<td class="paddings text-right"></td>
											</tr>
											<tr>
												<td class="paddings text-center"></td>
												<td class="paddings text-center">211</td>
												<td class="paddings">Akm penyusutan gedung</td>
												<td class="paddings text-right"></td>
												<td class="paddings text-right padding-right-5">Rp11,628,686</td>
											</tr>
											<tr>
												<td class="paddings text-center"></td>
												<td class="paddings text-center">214</td>
												<td class="paddings">Akm penyusutan inventaris kantor</td>
												<td class="paddings text-right"></td>
												<td class="paddings text-right padding-right-5">Rp16,732,742</td>
											</tr>
											<tr>
												<td class="paddings text-center"></td>
												<td class="paddings text-center">212</td>
												<td class="paddings">Akm penyusutan perangkat</td>
												<td class="paddings text-right"></td>
												<td class="paddings text-right padding-right-5">Rp62,545,031</td>
											</tr>
											<tr>
												<td class="paddings text-center"></td>
												<td class="paddings text-center">213</td>
												<td class="paddings">Akm penyusutan perangkat pendukung</td>
												<td class="paddings text-right"></td>
												<td class="paddings text-right padding-right-5">Rp1,345,436</td>
											</tr>
											<tr>
												<td class="paddings text-center"></td>
												<td class="paddings text-center">215</td>
												<td class="paddings">Akm penyusutan Kendaraan</td>
												<td class="paddings text-right"></td>
												<td class="paddings text-right padding-right-5"> Rp6,519,241</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">JUMLAH</td>
												<td class="paddings"></td>
												<td class="paddings text-right text-bold padding-right-5">Rp1,591,082,733</td>
												<td class="paddings text-right text-bold padding-right-5">Rp1,591,082,733</td>
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