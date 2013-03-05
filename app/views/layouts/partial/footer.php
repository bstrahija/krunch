	<hr>

	<footer>
		<p>&copy; 2013 Krunch&deg;, <a href="http://creolab.hr" title="Creo">Creo</a></p>
	</footer>
</div><!--/#layout-->

<?php echo Basset::show('script.js'); ?>
<?php
	echo '<pre>'; print_r(var_dump(
		DB::getQueryLog()
	)); echo '</pre>';
?>
</body>
</html>
