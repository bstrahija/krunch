<?php

// CSS assets
Basset::collection('style', function($collection)
{
	$collection->add('assets/css/bootstrap.min.css');
	$collection->add('assets/css/bootstrap-responsive.min.css');
	$collection->add('assets/css/font-awesome.min.css');
	$collection->add('assets/css/style.css');
});

// JS assets
Basset::collection('script', function($collection)
{
	$collection->add('assets/js/libs/jquery.min.js');
	$collection->add('assets/js/libs/bootstrap.min.js');
	$collection->add('assets/js/ajax.js');
	$collection->add('assets/js/main.js');
});
