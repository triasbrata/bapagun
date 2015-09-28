@inject('menu','Akademik\MenuFetcher')
<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
		<div>
			<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="expanded">
			<a href="../../html/dashboards/dashboard.html">
				<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
			</a>
		</div>
	</div>
	<div class="menubar-scroll-panel">
	
		<!-- BEGIN MAIN MENU -->
		<ul id="main-menu" class="gui-controls">
			<?php $role = Session::get('EmployerRole')  ?>
			{!!$menu->make($menu,$role)!!}
		<div class="menubar-foot-panel">
			<small class="no-linebreak hidden-folded">
				<span class="opacity-75">Copyright &copy; {{date('Y')}}</span> <strong>@TriasBrata</strong>
			</small>
		</div>
	</div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->