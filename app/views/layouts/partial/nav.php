<div class="navbar navbar-fixed-top navbar-inverse" id="nav">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?php echo URL::to('dashboard'); ?>"><i class="icon-book"></i> Krunch&deg;</a>

			<?php if ( ! Auth::guest()) : ?>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="home <?php echo (Request::segment(1) == 'dashboard' or ! Request::segment(1)) ? 'active' : null ; ?>"><a href="<?php echo URL::to('dashboard'); ?>"><i class="icon-home"></i></a></li>
						<li class="<?php echo (Request::segment(1) == 'invoices')  ? 'active' : null ; ?>"><a href="<?php echo URL::to('invoices'); ?>"><i class="icon-briefcase"></i> <?php echo trans('app.invoices'); ?></a></li>
						<li class="<?php echo (Request::segment(1) == 'clients')   ? 'active' : null ; ?>"><a href="<?php echo URL::to('clients'); ?>"><i class="icon-user"></i> <?php echo trans('app.clients'); ?></a></li>
						<li class="<?php echo (Request::segment(1) == 'projects')  ? 'active' : null ; ?>"><a href="<?php echo URL::to('projects'); ?>"><i class="icon-lightbulb"></i> <?php echo trans('app.projects'); ?></a></li>
					</ul>
					<ul class="nav pull-right">
						<li><a href="<?php echo URL::to('logout'); ?>" title="Logout"><i class="icon-lock"></i> <?php echo trans('app.logout'); ?></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			<?php endif; ?>
		</div>
	</div>
</div>
