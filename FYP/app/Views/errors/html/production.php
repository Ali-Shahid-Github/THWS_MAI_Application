<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	<link href="/assets/images/csLogo.png" rel="icon">

	<title>Something Went Wrong</title>

	<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
	</style>
</head>
<body>

	<div class="container text-center">

		<h1 class="headline">Something Went Wrong</h1>

		<p class="lead">Some error has been occured at server side due to some missing file, incomplete backup or library dependency. Please contact at info@cs-uet.com</p>

	</div>

</body>

</html>
