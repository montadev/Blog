 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('backend/img/avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{route('blog.index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('blog.index')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{route('blog.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{route('blog.Trashed')}}"><i class="fa fa-circle-o"></i> Trashed Post</a></li>
          </ul>
        </li>

          @if(Auth::user()->test!=0) 
           
           @if(count(App\Role::all()))


             @if(Auth::user()->role->title!='author')   
        <li><a href="{{route('categories.index')}}"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
            @endif
         
             @if(Auth::user()->role->title=='admin')
          <li><a href="{{route('users.index')}}"><i class="fa fa-user"></i> <span>Users</span></a></li>
             @endif

             @if(Auth::user()->role->title!='author') 
             <li>
             <a href="{{route('blog.info')}}"><i class="fa fa-info"></i> <span>Info de Jour</span></a></li>
             <li><a href="{{route('blog.infolist')}}"><i class="fa fa-info"></i> <span>List Info</span></a></li>
             @endif

             @if(Auth::user()->role->title!='author') 

               <li class="treeview">
                <a href="#">
                  <i class="fa fa-pencil"></i>
                  <span>Publicité</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">

                   <li><a href="{{route('blog.pub.index')}}"><i class="fa fa-circle-o"></i>All Pub</a></li>
                    <li><a href="{{route('blog.pub')}}"><i class="fa fa-info"></i> <span>Add new </span></a></li>
                  
                 
                </ul>
             </li>
             <li>
             
             </li>
             
             @endif

           @endif
         @endif  
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
