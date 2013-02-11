<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="{{ URL::to('dashboard') }}"><i class="icon-book"></i> Krunch&deg;</a>

			@if ( ! Auth::guest())
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="<?php echo (Request::segment(1) == 'dashboard') ? 'active' : null ; ?>"><a href="{{ URL::to('dashboard') }}"><i class="icon-dashboard"></i> Dashboard</a></li>
						<li class="<?php echo (Request::segment(1) == 'invoices')  ? 'active' : null ; ?>"><a href="{{ URL::to('invoices') }}"><i class="icon-briefcase"></i> Invoices</a></li>
						<li class="<?php echo (Request::segment(1) == 'clients')   ? 'active' : null ; ?>"><a href="{{ URL::to('clients') }}"><i class="icon-user"></i> Clients</a></li>
					</ul>
					<ul class="nav pull-right">
						<li><a href="{{ URL::to('logout') }}" title="Logout"><i class="icon-lock"></i> Logout</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			@endif
		</div>
	</div>
</div>
