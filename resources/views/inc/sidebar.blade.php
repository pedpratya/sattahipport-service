<!-- LEFT MENU -->
<div class="left-menu-box col-lg-2 col-md-2 col-sm-2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-sidebar nav-stacked">
			<li class="nav-mainmenu hidden-tablet">องค์กร</li>
			<li class="active">
			  <a href="{{ URL::to('admin/organization')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
			 </a>
			</li>
			<li>
			  <a href="{{ URL::to('admin/organization-create-or-edit')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 2
			  </a>
			</li>
			<li class="nav-mainmenu hidden-tablet">ระบบงาน</li>
                        <li class="active">
			  <a href="{{ URL::to('admin/system-admin')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
			 </a>
			</li>
			<li>
			  <a href="{{ URL::to('admin/system-admin-create-or-edit')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 2
			  </a>
			</li>
			<li class="nav-mainmenu hidden-tablet">User Management</li>
                        <li class="active">
			  <a href="{{ URL::to('admin/usermanagement')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
			 </a>
			</li>
			<li>
			  <a href="{{ URL::to('admin/usermanagement-create-or-edit')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 2
			  </a>
			</li>
                        <li>
			  <a href="{{ URL::to('admin/usermanagement-userlog')}}">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 3
			  </a>
			</li>
			<li class="nav-mainmenu hidden-tablet">รายงาน</li>
                        <li class="active">
			  <a href="#">
				  <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
			 </a>
			</li>
		</ul>
	</div><!--/.LEFT MENU -->
</div>