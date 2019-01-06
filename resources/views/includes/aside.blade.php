<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                
                <li> <a class="waves-effect waves-dark" href="{{url('/driver')}}" aria-expanded="false"><i class="icon-Car-Wheel"></i><span class="hide-menu">Dashboard</span></a>
                   
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-Double-Circle"></i><span class="hide-menu">Categories</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('/category')}}">Add Category</a></li>
                        <li><a href="{{url('/category/1')}}">Edit Category</a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{url('/driver/1')}}" aria-expanded="false"><i class="icon-Box-Full"></i><span class="hide-menu">Driver</span></a>

                </li>

                <li> <a class="waves-effect waves-dark" href="{{url(('/search'))}}" aria-expanded="false"><i class="icon-Box-Full"></i><span class="hide-menu">Inspection</span></a>

                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>