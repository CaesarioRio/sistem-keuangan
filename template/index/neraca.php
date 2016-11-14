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
							<h5 class="over-title margin-bottom"><span class="text-bold">Neraca</span></h5>
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
											<i class="fa fa-calendar padding-left-20"></i> November 2015
										</div>
									</div>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr>
												<th colspan="4" class="paddings">Aktiva</th>
												<th colspan="4" class="paddings text-right padding-right-10">Kewajiban dan Ekuitas</th>
											</tr>
											<tr class="paddings odd">
												<th class="paddings">Aktiva Lancar</th>
												<th class="paddings">Cat</th>
												<th class="paddings">Bulan Ini</th>
												<th class="paddings">Bulan Lalu</th>
												<th class="paddings">Kewajiban Lancar</th>
												<th class="paddings">Cat</th>
												<th class="paddings">Bulan Ini</th>
												<th class="paddings">Bulan Lalu</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td class="paddings">Kas dan Setara Kas</td>
												<td class="text-right padding-right-5">1</td>
												<td class="text-right padding-right-5">704.047.756</td>
												<td class="text-right padding-right-5">585.554.803</td>
												<td class="paddings">Hutang Usaha</td>
												<td class="text-right padding-right-5">9</td>
												<td class="text-right padding-right-5">170.823.806</td>
												<td class="text-right padding-right-5">62.700.100</td>
											</tr>
											<tr>
												<td class="paddings">Piutang Usaha</td>
												<td class="text-right padding-right-5">2</td>
												<td class="text-right padding-right-5">(188.556)</td>
												<td class="text-right padding-right-5">642.158</td>
												<td class="paddings">Hutang Bank</td>
												<td class="text-right padding-right-5">10</td>
												<td class="text-right padding-right-5">2.130.551.725</td>
												<td class="text-right padding-right-5">1.949.924.468</td>
											</tr>
											<tr>
												<td class="paddings">Piutang Lain-Lain</td>
												<td class="text-right padding-right-5">3</td>
												<td class="text-right padding-right-5">221.154.795</td>
												<td class="text-right padding-right-5">236.396.855</td>
												<td class="paddings">Hutang Lain-lain</td>
												<td class="text-right padding-right-5">11</td>
												<td class="text-right padding-right-5">20.237.748</td>
												<td class="text-right padding-right-5">652.748</td>
											</tr>
											<tr>
												<td class="paddings">Persediaan</td>
												<td class="text-right padding-right-5">4</td>
												<td class="text-right padding-right-5">164.253.092</td>
												<td class="text-right padding-right-5">153.091.441</td>
												<td class="paddings">Hutang Pajak</td>
												<td class="text-right padding-right-5">12</td>
												<td class="text-right padding-right-5">87.834.307</td>
												<td class="text-right padding-right-5">87.117.395</td>
											</tr>
											<tr>
												<td class="paddings text-bold">Jumlah Aktiva Lancar</td>
												<td></td>
												<td class="text-right padding-right-5 text-bold">1.373.644.305</td>
												<td class="text-right padding-right-5 text-bold">1.266.503.206</td>
												<td class="paddings text-bold">Jumlah Kewajiban Lancar</td>
												<td></td>
												<td class="text-right padding-right-5 text-bold">1.877.620.047</td>
												<td class="text-right padding-right-5 text-bold">2.341.457.641</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr class="paddings odd">
												<th class="paddings">Aktiva Tetap</th>
												<th class="paddings"></th>
												<th class="paddings"></th>
												<th class="paddings"></th>
												<th class="paddings">Ekuitas</th>
												<th class="paddings"></th>
												<th class="paddings"></th>
												<th class="paddings"></th>
											</tr>
											<tr>
												<td class="paddings">Harga Perolehan</td>
												<td class="text-right padding-right-5">8</td>
												<td class="text-right padding-right-5">6.157.727.205</td>
												<td class="text-right padding-right-5">6.001.802.825</td>
												<td class="paddings">Modal</td>
												<td class="paddings"></td>
												<td class="text-right padding-right-5">640.000.000</td>
												<td class="text-right padding-right-5">640.000.000</td>
											</tr>
											<tr>
												<td class="paddings">Akumulasi Penyusutan</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">(2.253.518.145)</td>
												<td class="text-right padding-right-5">(2.154.747.010)</td>
												<td class="paddings">Saldo Laba / (Rugi) ditahan</td>
												<td class="paddings"></td>
												<td class="text-right padding-right-5">1.411.845.630</td>
												<td class="text-right padding-right-5">1.411.845.630</td>
											</tr>
											<tr>
												<td class="paddings"></td>
												<td class="paddings"></td>
												<td class="paddings"></td>
												<td class="paddings"></td>
												<td class="paddings">Saldo Laba / (Rugi) Tahun Berjalan</td>
												<td class="paddings"></td>
												<td class="text-right padding-right-5">1.869.982.636</td>
												<td class="text-right padding-right-5">1.357.255.498</td>
											</tr>
											<tr>
												<td class="paddings text-bold">Aktiva Tetap Bersih</td>
												<td class="paddings"></td>
												<td class="text-right padding-right-5 text-bold">3.904.209.060</td>
												<td class="text-right padding-right-5 text-bold">3.847.055.816</td>
												<td class="paddings">Deviden</td>
												<td></td>
												<td class="text-right padding-right-5">(637.000.000)</td>
												<td class="text-right padding-right-5">(637.000.000)</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td class="paddings text-bold">Jumlah Ekuitas</td>
												<td></td>
												<td class="text-right padding-right-5 text-bold">3.284.828.266</td>
												<td class="text-right padding-right-5 text-bold">2.772.101.128</td>
											</tr>
											<tr>
												<td class="paddings text-bold">Aktiva Lain-lain</td>
												<td></td>
												<td class="text-right padding-right-5">-</td>
												<td class="text-right padding-right-5">-</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td class="paddings text-bold">Total Aktiva</td>
												<td></td>
												<td class="text-right padding-right-5 text-bold">5.277.853.365</td>
												<td class="text-right padding-right-5 text-bold">5.113.559.021</td>
												<td class="paddings text-bold">Total Kewajiban dan Ekuit</td>
												<td></td>
												<td class="text-right padding-right-5 text-bold">5.162.448.313</td>
												<td class="text-right padding-right-5 text-bold">5.113.558.769</td>
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