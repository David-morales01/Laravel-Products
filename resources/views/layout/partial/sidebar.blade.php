
<sidebar class="sidebar scroll-menu-span">
    
    <div class="sidebar__header">
        <a href="#">
        <i class="fas fa-user-circle"></i>
        <span>
            David Morales  
        </span>
        </a>
    </div>
    <div class="sidebar__body">
        <nav>
            <ul>
                <li>
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a> 
                </li> 
                <li>
                    <a href="#">
                    <i class="fas fa-user-cog"></i>
                        <span>Seller</span>

                        <ul class="sub-menu">

                            <li>
                                <a href="{{route('sellers.index')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>List Seller</span>
                                </a>
                            </li><li>
                                <a href="{{route('sellers.create')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>Create Seller</span>
                                </a>
                            </li>
                        </ul>
                    </a> 
                </li>  


                
                <li>
                    <a href="#">
                    <i class="fas fa-user-cog"></i>
                        <span>Branch</span>

                        <ul class="sub-menu">

                            <li>
                                <a href="{{route('branches.index')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>List Branch</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('branches.create')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>Create Branch</span>
                                </a>
                            </li>
                        </ul>
                    </a> 
                </li>  

                
                <li>
                    <a href="#">
                    <i class="fas fa-user-cog"></i>
                        <span>Product</span>

                        <ul class="sub-menu">

                            <li>
                                <a href="{{route('products.index')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>List  Product</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('products.create')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>Create Product</span>
                                </a>
                            </li>
                        </ul>
                    </a> 
                </li>  
                
                <li>
                    <a href="#">
                    <i class="fas fa-user-cog"></i>
                        <span>Category</span>

                        <ul class="sub-menu">

                            <li>
                                <a href="{{route('categories.index')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>List  Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('categories.create')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>Create Category</span>
                                </a>
                            </li>
                        </ul>
                    </a> 
                </li>  




                
                <li>
                    <a href="#">
                    <i class="fas fa-user-cog"></i>
                        <span>Sales</span>

                        <ul class="sub-menu">

                            <li>
                                <a href="{{route('sales.index')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>List  Sales</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('sales.create')}}"> 
                                    <i class="far fa-circle nav-icon"></i>
                                    <span>Create Sales</span>
                                </a>
                            </li>
                        </ul>
                    </a> 
                </li>  
            </ul>
        </nav>
    </div>
</sidebar>