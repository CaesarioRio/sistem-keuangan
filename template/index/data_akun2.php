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
	<link rel="stylesheet" href="assets/css/dtree.css" />
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
						<div class="col-sm-12">
							<div class="panel panel-white no-radius margin-top-10">
								<div class="panel-body padding-25">
									<div class="table-responsive padding-10">
										<table class="table">
											<thead>
												<td><i class="fa fa-folder-open text-yellow margin-right-10"></i>100 Aktiva</td>
												<td></td>
											</thead>
											<tbody>
												<tr>
													<td><i class="fa fa-folder-open text-yellow margin-right-10 margin-left-25"></i>101 Aktiva Lancar</td>
												</tr>
												<tr>
													<td><i class="fa fa-folder-open text-yellow margin-right-10 margin-left-50"></i>101.1 Kas dan Setara Kas</td>
												</tr>
												<tr>
													<td><i class="fa fa-file-o margin-right-10 margin-left-50"></i>101.1.01 Kas Kecil Surabaya</td>
												</tr>
												<tr>
													<td><i class="fa fa-file-o margin-right-10 margin-left-50"></i>101.1.02 Kas Kecil Malang</td>
												</tr>
												<tr>
													<td><i class="fa fa-file-o margin-right-10 margin-left-50"></i>101.1.03 Kas Kwitansi</td>
												</tr>
												<tr>
													<td><i class="fa fa-file-o margin-right-10 margin-left-50"></i>101.1.04 Setoran dalam Perjalanan</td>
												</tr>
												<tr>
													<td><i class="fa fa-file-o margin-right-10 margin-left-50"></i>101.1.05 Bank Mandiri 4444</td>
												</tr>
												<tr>
													<td><i class="fa fa-file-o margin-right-10 margin-left-50"></i>101.1.06 Paypal</td>
												</tr>
												<tr>
													<td><i class="fa fa-folder-open text-yellow margin-right-10 margin-left-50"></i>101.2 Bank</td>
												</tr>
												<tr>
													<td></td>
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
<script src="assets/js/jquery-2.1.1.min.js"></script>
<script src="assets/js/dtree.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".dTree").dTree();
    });  
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>