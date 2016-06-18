
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Quản lý nghiên cứu khoa học - Khoa Công Nghệ Thông Tin</title>

		<!-- Bootstrap CSS -->
		
		<link rel="stylesheet" type="text/css" href="include/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="include/css/index.css">
		<script src="include/js/jquery-1.12.3.min.js"></script>
		<script src="include/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="container" id="header">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div  class="row">
				<?php include("module/header.php") ?>
			</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				
			</div>
		</div>
		<div class="container" id="container">
			
			<div id="menu">
				<?php include("module/menu_index.php") ?>
			</div>
			<div id="line" class="row">

				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="color: red">
					<?php echo date("d/m/y h:i:s")?>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					

				</div>
				
			</div>
			<div id="content">
				<?php include("module/content_.php") ?>
			</div>
			<div id="footer">
				<?php include("module/footer.php") ?>

			</div>
			
		</div>
		
	</body>
</html>