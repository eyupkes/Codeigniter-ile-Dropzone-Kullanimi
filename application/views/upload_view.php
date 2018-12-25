<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Çoklu Dosya Aktarımı</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/dropzone.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/custom.css") ?>">
</head>
<body>
	
	<div class="container">
		<h2 class="text-center">Dropzone ile Çoklu Dosya Aktarımı</h2>

		<form action="<?php echo base_url("files/upload") ?>" class="dropzone" id="dropForm"></form>
	</div>



	<script src="<?php echo base_url("assets/dropzone.js"); ?>"></script>
	<script src="<?php echo base_url("assets/jquery-3.3.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/custom.js"); ?>"></script>
</body>
</html>