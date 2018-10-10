 
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li>
          <a href="{{ route('admin.index') }}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <!-- User Management -->        
        <li class="treeview {{ active_segment(2, 'users') }}">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ active_path('admin/users') }}">
              <a href="{{ route('admin.users.index') }}"><i class="fa fa-circle-o"></i>User Lists</a>
            </li>
            <li class="{{ active_path('weesi-admin/users/create') }}">
              <a href="{{ route('admin.users.create') }}"><i class="fa fa-circle-o"></i>Add New User</a>
            </li>
          </ul>
        </li>

        <!-- Pdf Management -->        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
