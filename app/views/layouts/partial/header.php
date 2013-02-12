<!doctype html>
<html ng-app>
<head>
	<title>Krunch</title>

	<?php echo Basset::show('style.css'); ?>

	<script type="text/javascript">
	var API_KEY = "<?php echo Config::get('app.api_key'); ?>";
	</script>
</head>
<body>
<header>
	<?php echo View::make('layouts.partial.nav'); ?>
</header>

<div class="container-fluid" id="layout">
