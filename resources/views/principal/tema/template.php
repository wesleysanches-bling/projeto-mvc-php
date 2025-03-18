<!DOCTYPE html>
<html lang="pt">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?= $title ?>
		</title>

		<!-- Bootstrap CSS -->
		<link
		rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link
		rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<!-- Estilo owlcarousel -->
		<link rel="stylesheet" href="<?= URL_BASE ?>assets/vendor/owlcarosel.css/owl.carousel.min.css" type="text/css">
		<link
		rel="stylesheet" href="<?= URL_BASE ?>assets/vendor/owlcarosel.css/owl.theme.default.min.css" type="text/css">

		<!-- sweet alert-->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
		<link
		rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.19.0/dist/sweetalert2.min.css">

		<!-- Estilo customizado -->
		<link
		rel="stylesheet" href="<?= URL_BASE ?>assets/css/all.css" type="text/css">

		<!-- estilo ui-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet"/>

		<script>
			var url_base = "<?= URL_BASE ?>";
		</script>
	</head>

	<body>
		<div class="ajaxload"></div>
		<div class="loader-wrapper"></div>
		<?php include 'header.php' ?>
		<?= $content ?>
		<?php include 'footer.php' ?>
	</body>
</html>
