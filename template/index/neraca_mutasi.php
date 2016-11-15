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
							<h5 class="over-title margin-bottom">Neraca <span class="text-bold">Mutasi</span></h5>
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
										<div class="fa-hover pull-right margin-bottom-5">
								<i class="fa fa-calendar"></i> 10 November 2015
										</div>
									</div>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th colspan="8" class="paddings">Neraca Mutasi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="paddings">NO. B.B.</td>
												<td rowspan="2" class="paddings">Uraian Perkiraan Buku Besar</td>
												<td rowspan="2" class="paddings">Saldo Awal</td>
												<td colspan="2" class="paddings">Mutasi Keuangan</td>
												<td colspan="2" class="paddings">Jurnal</td>
												<td rowspan="2" class="paddings">Saldo Akhir</td>
											</tr>
											<tr>
												<td class="paddings text-center">D</td>
												<td class="paddings text-center">K</td>
												<td class="paddings text-center">D</td>
												<td class="paddings text-center">K</td>
											</tr>
											<tr>
												<td></td>
												<td class="paddings text-bold">Aktiva Lancar</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td class="text-center text-bold">100</td>
												<td class="text-bold paddings">Kas</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td class="text-center">101</td>
												<td class="paddings">kas kecil surabaya</td>
												<td class="text-right padding-right-5">365,356</td>
												<td class="text-right padding-right-5">10,020,000</td>
												<td class="text-right padding-right-5">8,531,389</td>
												<td></td>
												<td></td>
												<td class="text-right padding-right-5">1,853,967</td>
											</tr>
											<tr>
												<td class="text-center">102</td>
												<td class="paddings">kas kecil malang</td>
												<td class="text-right padding-right-5">1,703,617</td>
												<td class="text-right padding-right-5">25,120,000</td>
												<td class="text-right padding-right-5">26,617,635 </td>
												<td></td>
												<td></td>
												<td class="text-right padding-right-5">205,982</td>
											</tr>
											<tr>
												<td class="text-center">103</td>
												<td class="paddings">kas kwitansi</td>
												<td class="text-right padding-right-5">6,873,741</td>
												<td class="text-right padding-right-5">39,957,510</td>
												<td class="text-right padding-right-5">35,059,796 </td>
												<td></td>
												<td></td>
												<td class="text-right padding-right-5">11,771,455</td>
											</tr>
											<tr>
												<td class="text-center">104</td>
												<td class="paddings">setoran dalam perjalanan</td>
												<td class="text-right padding-right-5">13,885,532</td>
												<td class="text-right padding-right-5">-</td>
												<td class="text-right padding-right-5">-</td>
												<td></td>
												<td></td>
												<td class="text-right padding-right-5">13,885,532</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Jumlah Aktiva</td>
												<td class="text-right padding-right-5">5,113,558,938</td>
												<td class="text-right padding-right-5">113,628,406</td>
												<td class="text-right padding-right-5">105,342,820</td>
												<td class="text-right padding-right-5">193,915,972</td>
												<td class="text-right padding-right-5">199,825,422</td>
												<td class="text-right padding-right-5">5,115,935,075</td>
											</tr>
										</tbody>
									</table>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th colspan="8" class="paddings">Neraca</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="paddings">NO. B.B.</td>
												<td rowspan="2" class="paddings">Uraian Perkiraan Buku Besar</td>
												<td rowspan="2" class="paddings">Saldo Awal</td>
												<td colspan="2" class="paddings">Mutasi Keuangan</td>
												<td colspan="2" class="paddings">Jurnal</td>
												<td rowspan="2" class="paddings">Saldo Akhir</td>
											</tr>
											<tr>
												<td class="paddings text-center">D</td>
												<td class="paddings text-center">K</td>
												<td class="paddings text-center">D</td>
												<td class="paddings text-center">K</td>
											</tr>
											<tr>
												<td class="text-center text-bold">310</td>
												<td class="text-bold paddings">Hutang</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td class="text-center">311</td>
												<td class="paddings">Hutang usaha</td>
												<td class="text-right padding-right-5">(62,700,100)</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">176,873,706</td>
												<td class="text-right padding-right-5">(239,573,806)</td>
											</tr>
											<tr>
												<td class="text-center">312</td>
												<td class="paddings">Hutang Bank Bukopin KPR</td>
												<td class="text-right padding-right-5">1</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">1</td>
											</tr>
											<tr>
												<td class="text-center">313</td>
												<td class="paddings">Hutang Bank Bukopin Syariah</td>
												<td class="text-right padding-right-5">(5)</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">(5)</td>
											</tr>
											<tr>
												<td class="text-center">314</td>
												<td class="paddings">Hutang Bank Bukopin PRK</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
											</tr>
											<tr>
												<td class="text-center">315</td>
												<td class="paddings">Hutang CC</td>
												<td class="text-right padding-right-5">(46,465,309)</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">(46,465,309)</td>
											</tr>
											<tr>
												<td class="text-center">316</td>
												<td class="paddings">Hutang Bank Jatim</td>
												<td class="text-right padding-right-5">(1,903,459,155)</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">(1,903,459,155)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Total Kewajiban</td>
												<td class="text-right padding-right-5">(2,341,457,641)</td>
												<td class="text-right padding-right-5">15,000</td>
												<td class="text-right padding-right-5">39,957,510</td>
												<td class="text-right padding-right-5">1,204,918,316</td>
												<td class="text-right padding-right-5">383,383,610</td>
												<td class="text-right padding-right-5">(1,559,865,444)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Total Modal</td>
												<td class="text-right padding-right-5">(2,772,101,128)</td>
												<td class="text-right padding-right-5">31,662,924</td>
												<td class="text-right padding-right-5">6,000</td>
												<td class="text-right padding-right-5">192,248,445</td>
												<td class="text-right padding-right-5">1,007,873,701</td>
												<td class="text-right padding-right-5">(3,556,069,461)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Total Kewajiban dan Modal</td>
												<td class="text-right padding-right-5">(5,113,558,769)</td>
												<td class="text-right padding-right-5">31,677,924</td>
												<td class="text-right padding-right-5">39,963,510</td>
												<td class="text-right padding-right-5">1,397,166,761</td>
												<td class="text-right padding-right-5">1,391,257,311</td>
												<td class="text-right padding-right-5">(5,115,934,905)</td>
											</tr>
										</tbody>
									</table>
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th colspan="8" class="paddings">Laba Rugi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="paddings">NO. B.B.</td>
												<td rowspan="2" class="paddings">Uraian Perkiraan Buku Besar</td>
												<td rowspan="2" class="paddings">Saldo Awal</td>
												<td colspan="2" class="paddings">Mutasi Keuangan</td>
												<td colspan="2" class="paddings">Jurnal</td>
												<td rowspan="2" class="paddings">Saldo Akhir</td>
											</tr>
											<tr>
												<td class="paddings text-center">D</td>
												<td class="paddings text-center">K</td>
												<td class="paddings text-center">D</td>
												<td class="paddings text-center">K</td>
											</tr>
											<tr>
												<td class="text-center text-bold">500</td>
												<td class="text-bold paddings">Pendapatran Register</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td class="text-center">501</td>
												<td class="paddings">Penjualan Register Domain TLD</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">80,020,000</td>
												<td class="text-right padding-right-5">(80,020,000)</td>
											</tr>
											<tr>
												<td class="text-center">502</td>
												<td class="paddings">Penjualan Register Domain ID</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">25,050,000</td>
												<td class="text-right padding-right-5">(25,050,000)</td>
											</tr>
											<tr>
												<td class="text-center">503</td>
												<td class="paddings">Penjualan Register Website</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">34,600,000</td>
												<td class="text-right padding-right-5">(34,600,000)</td>
											</tr>
											<tr>
												<td class="text-center">504 </td>
												<td class="paddings">Penjualan Register Shared Hosting Jaghos ID</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">102,677,000</td>
												<td class="text-right padding-right-5">(102,677,000)</td>
											</tr>
											<tr>
												<td class="text-center">505 </td>
												<td class="paddings">Penjualan Register Shared Hosting Jaghos US</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">8,500,000</td>
												<td class="text-right padding-right-5">(8,500,000)</td>
											</tr>
											<tr>
												<td class="text-center">506 </td>
												<td class="paddings">Penjualan Register Reseller Hosting US</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">1,200,000</td>
												<td class="text-right padding-right-5">(1,200,000)</td>
											</tr>
											<tr>
												<td class="text-center">507 </td>
												<td class="paddings">Penjualan Register Reseller Hosting ID</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td></td>
												<td class="text-right padding-right-5">12,050,000</td>
												<td class="text-right padding-right-5">(12,050,000)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Total Biaya Langsung</td>
												<td></td>
												<td class="text-right padding-right-5">3,403,000</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">54,383,380</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">57,786,380</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Laba Kotor</td>
												<td></td>
												<td class="text-right padding-right-5">3,403,000</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">54,383,380</td>
												<td class="text-right padding-right-5">1,007,873,701</td>
												<td class="text-right padding-right-5">(950,087,321)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Total Biaya umum dan ADM</td>
												<td></td>
												<td class="text-right padding-right-5">28,259,924</td>
												<td class="text-right padding-right-5">6,000</td>
												<td class="text-right padding-right-5">137,805,076</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">166,059,000</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Total P/K lain-lain</td>
												<td></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">59,988</td>
												<td class="text-right padding-right-5"></td>
												<td class="text-right padding-right-5">59,988</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Jumlah Laba / Rugi Bejalan</td>
												<td></td>
												<td class="text-right padding-right-5">31,662,924</td>
												<td class="text-right padding-right-5">6,000</td>
												<td class="text-right padding-right-5">192,248,445</td>
												<td class="text-right padding-right-5">1,007,873,701</td>
												<td class="text-right padding-right-5">(783,968,333)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Jumlah Ekuitas</td>
												<td class="text-right padding-right-5">(2,772,101,128)</td>
												<td class="text-right padding-right-5">31,662,924</td>
												<td class="text-right padding-right-5">6,000</td>
												<td class="text-right padding-right-5">192,248,445</td>
												<td class="text-right padding-right-5">1,007,873,701</td>
												<td class="text-right padding-right-5">(3,556,069,461)</td>
											</tr>
											<tr>
												<td colspan="2" class="paddings text-bold">Jumlah Kewajiban dan Ekuitas</td>
												<td class="text-right padding-right-5">(5,113,558,769)</td>
												<td class="text-right padding-right-5">31,677,924</td>
												<td class="text-right padding-right-5">39,963,510</td>
												<td class="text-right padding-right-5">1,397,166,761</td>
												<td class="text-right padding-right-5">1,391,257,311</td>
												<td class="text-right padding-right-5">(5,115,934,905)</td>
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