<!-- Vertical menu side bar  -->
<div class="vertical-menu ">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Stargit ddt -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title" data-key="t-menu">Menu</li> -->
                <li>
                    <a href="/dashboard">
                    <i class="fas fa-home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <!-- analytics -->
                <li>
                    <a href="/analytics">
                    <i class="fas fa-chart-bar"></i>
                        <span data-key="t-dashboard">Analytics</span>
                    </a>
                </li>
                <!-- Feedback -->
                <li>
                    <a href="/feedbacks">
                    <i class="fas fa-comment-alt "></i>
                        <span data-key="t-dashboard">Feedback</span>
                    </a>
                </li>
                <!-- Resources -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                    <i class=" fas fa-file-alt"></i>
                        <span data-key="t-apps">Resources</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/resource_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="/resource_categories">
                                <span data-key="t-calendar"
                                    >View Categories</span
                                >
                            </a>
                        </li>

                        <li>
                            <a href="/resources/create">
                                <span data-key="t-chat">Add Resource</span>
                            </a>
                        </li>

                        <li>
                            <a href="/resources">
                                <span data-key="t-chat">View Resources</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- Gallery -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-photo-video"></i>
                        
                        <span data-key="t-apps">Gallery</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/gallery_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="/gallery_categories">
                                <span data-key="t-calendar"
                                    >View Categories</span
                                >
                            </a>
                        </li>

                        <li>
                            <a href="/galleries/create">
                                <span data-key="t-chat">Add Photo</span>
                            </a>
                        </li>

                        <li>
                            <a href="/galleries">
                                <span data-key="t-chat">View Photos</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Services -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-people-carry"></i>
                        <span data-key="t-apps">Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/service_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="/service_categories">
                                <span data-key="t-calendar"
                                    >View Categories</span
                                >
                            </a>
                        </li>

                        <li>
                            <a href="/services/create">
                                <span data-key="t-chat">Add Service</span>
                            </a>
                        </li>

                        <li>
                            <a href="/services">
                                <span data-key="t-chat">View Services</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Projects -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-university"></i>
                        <span data-key="t-apps">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/project_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="/project_categories">
                                <span data-key="t-calendar"
                                    >View Categories</span
                                >
                            </a>
                        </li>

                        <li>
                            <a href="/projects/create">
                                <span data-key="t-chat">Add Project</span>
                            </a>
                        </li>

                        <li>
                            <a href="/projects">
                                <span data-key="t-chat">View Projects</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <hr>

                @guest
                
                <!-- Login -->
                @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}">
                        <i class="fas fa-user-check"></i>
                        <span data-key="t-apps">Login</span>
                    </a>
                    
                </li>
                @endif

                <!-- Register -->
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">
                    <i class="fas fa-user-check"></i>
                        <span data-key="t-apps">Register</span>
                    </a>
                    
                </li>
                @endif

                <!-- else -->
                @else

                    <!-- Users -->
                    @can('user-list')
                    <li>
                    <a href="javascript: void(0);" class="has-arrow">
                    <i class="fas fa-user-check"></i>
                        <span data-key="t-apps">Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                       

                        

                        <li>
                            <a href="{{ route('users.create') }}">
                                <span data-key="t-chat">Add User</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('users.index') }}">
                                <span data-key="t-chat">View Users</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                <!-- Roles -->
                @can('role-list')
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class=" fas fa-user-plus"></i>
                        <span data-key="t-apps">Roles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('roles.create') }}">
                                <span data-key="t-calendar">Add Roles</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('roles.index') }}">
                                <span data-key="t-calendar">View Roles</span>
                            </a>
                        </li>

                       
                       
                    </ul>
                </li>
                @endcan


                <!-- Permissions -->
                @can('permission-list')
                 <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class=" fas fa-user-lock"></i>
                        <span data-key="t-apps">Permissions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('permissions.create') }}">
                                <span data-key="t-calendar">Add Permissions</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('permissions.index') }}">
                                <span data-key="t-calendar">View Permissions</span>
                            </a>
                        </li>

                       
                       
                    </ul>
                </li>
                @endcan


                
                @can('posts-section-dropdown')
                <!-- Posts -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- Post categories create -->
                    @can('postcategories-create')
                        <li>
                            <a href="/post_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>
                    @endcan

                    <!-- Post categories list -->
                    @can('postcategories-list')
                        <li>
                            <a href="/post_categories">
                                <span data-key="t-calendar"
                                    >View Categories</span
                                >
                            </a>
                        </li>
                    @endcan

                        <!-- Create post -->
                        @can('post-create')
                        <li>
                            <a href="{{ route('posts.create') }}">
                                <span data-key="t-chat">Add Post</span>
                            </a>
                        </li>
                       @endcan

                    <!-- List posts -->
                       @can('post-list')

                        <li>
                            <a href="{{ route('posts.index') }}">
                                <span data-key="t-chat">View Posts</span>
                            </a>
                        </li>
                      @endcan

                    </ul>
                </li>
                @endcan
        
              

                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-power-off"></i>
                        <span data-key="t-apps">Logout</span>
                    </a>
                    
                </li>


                @endguest

























            </ul>

            <div
                class="card sidebar-alert border-5 text-center mx-4 mb-0 mt-5"
                style="border-radius: 100px 100px 0px 0px"
            >
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="" />
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Developer</h5>
                        <p class="font-size-13">Wandie Innocent</p>
                        <a href="#!" class="btn btn-primary mt-2">Say Hello</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
