<?php

// CSS assets
Basset::collection('style', function($collection)
{
	$collection->add('assets/less/bootstrap/bootstrap.less');
	$collection->add('assets/less/font-awesome.min.css');
	$collection->add('assets/less/style.less');
})->apply('LessphpFilter');

// JS assets
Basset::collection('script', function($collection)
{
	$collection->add('assets/js/libs/jquery.min.js');
	$collection->add('assets/js/libs/bootstrap.min.js');
	$collection->add('assets/js/ajax.js');
	$collection->add('assets/js/main.js');
});
