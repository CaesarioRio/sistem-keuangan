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
							<h5 class="over-title margin-bottom">List <span class="text-bold">Kode Akun</span></h5>
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
								<div class="table-responsive">
									<table class="table table-bordered" id="sample-table-1">
										<thead>
											<tr class="paddings odd">
												<th class="paddings">Code</th>
												<th class="paddings">Kategori</th>
												<th class="paddings">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="paddings">162</td>
												<td class="paddings">PPH 23</td>
												<td class="paddings">(334.769)</td>
												</tr>
											<tr>
												<td class="paddings">341</td>
												<td class="paddings">Deposit</td>
												<td class="paddings">(4.483.488)</td>
											</tr>
											<tr>
												<td class="paddings">337</td>
												<td class="paddings">Hutang PPN Keluaran</td>
												<td class="paddings">101.011.356</td>
											</tr>
											<tr>
												<td class="paddings">323</td>
												<td class="paddings">Hutang Materai</td>
												<td class="paddings">-</td>
											</tr>
											<tr>
												<td class="paddings">323</td>
												<td class="paddings">Hutang Pengiriman</td>
												<td class="paddings"	>-</td>
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