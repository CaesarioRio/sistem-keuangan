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
						<div class="panel-heading"><h5 class="over-title margin-bottom"> Data <span class="text-bold">Result</span></h5></div>
					</div>
				</div>
				<div class="container-fluid padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body padding-top-10 padding-bottom-50">
									<div class="table-responsive padding-10">
										<table class="table">
											<thead>
												<td>
													<a href="#" data-toggle="dropdown" aria-expanded="false">No. Akun <i class="fa fa-angle-down"></i></a>
													<ul class="dropdown-menu" role="menu">
														<li>
															<a href=""></a>
														</li>
													</ul>
												</td>
												<td>
													<a href="#" data-toggle="dropdown" aria-expanded="false">Product <i class="fa fa-angle-down"></i></a>
													<ul class="dropdown-menu" role="menu">
														<li>
															<a href=""></a>
														</li>
													</ul>
												</td>
												<td>
													<a href="#" data-toggle="dropdown" aria-expanded="false">Type <i class="fa fa-angle-down"></i></a>
													<ul class="dropdown-menu" role="menu">
														<li>
															<a href=""></a>
														</li>
													</ul>
												</td>
												<td>
													<a href="#" data-toggle="dropdown" aria-expanded="false">Packet <i class="fa fa-angle-down"></i></a>
													<ul class="dropdown-menu" role="menu">
														<li>
															<a href=""></a>
														</li>
													</ul>
												</td>
												<td>
													
												</td>
											</thead>
											<tbody>
												<tr>
													<td>231</td>
													<td>gdj</td>
													<td>fh</td>
													<td>hdf</td>
													<td><a href="#"><u>Delete</u></a></td>
												</tr>
												<tr>
													<td>433</td>
													<td>hdh</td>
													<td>fdhd</td>
													<td>fdh</td>
													<td><a href="#"><u>Delete</u></a></td>
												</tr>
												<tr>
													<td>537</td>
													<td>fh</td>
													<td>fh</td>
													<td>sfhs</td>
													<td><a href="#"><u>Delete</u></a></td>
												</tr>
												<tr>
													<td>987</td>
													<td>fh</td>
													<td>fh</td>
													<td>sh</td>
													<td><a href="#"><u>Delete</u></a></td>
												</tr>
												<tr>
													<td>435</td>
													<td>asc</td>
													<td>va</td>
													<td>afvf</td>
													<td><a href="#"><u>Delete</u></a></td>
												</tr>
											</tbody>
											
										</table>
									</div>
									<div class="pull-right">
										<a href="result.php" class="btn btn-primary btn-o margin-top-10">Simpan</a>
										<a href="result.php" class="btn btn-primary margin-top-10">Cancel</a>
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