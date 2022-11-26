 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL::to('/admin/dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Project </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to('/admin/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           <!--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Place</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="{{route('place.all')}}">All place and Hotel</a>
                       
                    </div>
                </div>
            </li> -->
            <!--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    <span>Order</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('pending.order')}}">Pending Order</a>
                        <a class="collapse-item" href="{{route('active.order')}}">Accept Order</a>
                         <a class="collapse-item" href="{{route('cancel.order')}}">Cancel Order</a>
                        
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->


             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Portfolio</span>
                </a>
                <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('portfolio-category.index')}}">Portfolio Category</a>
                        <a class="collapse-item" href="{{route('portfolio.index')}}">All Portfolio</a>
                        
                    </div>
                </div>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities9"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Resume</span>
                </a>
                <div id="collapseUtilities9" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                      
                        <a class="collapse-item" href="{{route('resume.cat')}}">All Cat</a>
                      <a class="collapse-item" href="{{route('resume.index')}}">All Resume</a>
                        
                    </div>
                </div>
            </li>

             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities7"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Album</span>
                </a>
                <div id="collapseUtilities7" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('album-category.index')}}">Album Name</a>
                        <a class="collapse-item" href="{{route('album.index')}}">All Photo</a>
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities23"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Blogs</span>
                </a>
                <div id="collapseUtilities23" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('news.category.index')}}">blog Category</a>
                        <a class="collapse-item" href="{{route('news.all')}}">All Blog</a>
                        
                    </div>
                </div>
            </li>

             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Client</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{route('Client-category.index')}}"> Client Category</a>
                        <a class="collapse-item" href="{{route('Client.index')}}">All client</a>
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about.all')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>About Me</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesh"
                    aria-expanded="true" aria-controls="collapseUtilitiesh">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
                <div id="collapseUtilitiesh" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                    <!-- <a class="nav-link collapse-item" href="{{route('slider.all')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Slider</span></a>-->
                       
                      <!--   <a class="collapse-item" href="{{route('feature.all')}}">ALL Feature</a> -->
                       <!--  <a class="collapse-item" href="{{route('news.all')}}">All News</a>
                        <a class="collapse-item" href="{{route('banner.all')}}">All banner</a>-->
                        <a class="collapse-item" href="{{route('about.all')}}">All Overview</a> 
                        <a class="collapse-item" href="{{route('activity.all')}}">Recent Activity</a>
                        <a class="collapse-item" href="{{route('social.activity.all')}}">Social Activity</a>
                        <a class="collapse-item" href="{{route('achievement.all')}}"> All Achievement</a>
                           
                        
                    </div>
                </div>
            </li>


            

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
                <a class="nav-link" href="{{route('page.all')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pages</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="{{route('admin.view.user')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span></a>
            </li>


            

            <!--  <li class="nav-item">
                <a class="nav-link" href="{{route('des.all')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Popular Destination</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{route('site.lang')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Language</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.seo')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Seo Setting</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="{{route('general')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Settings</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>