<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                             
                            <a href="{{url('admin/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/add-category')}}">Add Category</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/manage-category')}}">Manage Category</a>
                                </li>
                            </ul>
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-anchor fa-fw"></i>Sub Category Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/add-sub-category')}}">Add Sub Category</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/manage-sub-category')}}">Manage Sub Category</a>
                                </li>
                            </ul>
                        </li>
                     
                        <li>
                            <a href="#"><i class="fa fa-bookmark fa-fw"></i> Manufacture Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/add-manufacture')}}">Add Manufacture</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/manage-manufacture')}}">Manage Manufacture</a>
                                </li>
                            </ul>
                          
                        </li>
                        
                  
                         <li>
                            <a href="#"><i class="fa fa-phone fa-fw"></i> Product Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/add-product')}}">Add Product</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/manage-product')}}">Manage Product</a>
                                </li>
                            </ul>
                          
                        </li>
                        
                           <li>
                            <a href="#"><i class="fa fa-phone fa-fw"></i> Order Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('admin/view-order')}}">View All Order</a>
                                </li>                            
                            </ul>
                          
                        </li>
                        
                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>