     <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('/') }}"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle text-success"></i>Dashboard <span class="badge badge-success">6</span></a>
                                
                            </li>
                            <li class="nav-divider">
                                List Product
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link" href="{{ url('/product') }}"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-book text-warning"></i>Product <span class="badge badge-success">6</span></a>
                                
                            </li>
                            <li class="nav-divider">
                                List Photo Product
                            </li> 
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('product-galeri') }}"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-book text-warning"></i>Product-Gallery<span class="badge badge-success">6</span></a>
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link" href="{{ url('transaction') }}"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-book text-danger"></i>Transaksi<span class="badge badge-success">6</span></a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>