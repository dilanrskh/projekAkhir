<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('home.index') }}" class="brand-link">
        <img src="{{asset('images/viechalogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">VIECHA</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('images/viechalogo.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block font-weight-bold">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-chart-simple"></i>
                        <p>
                            Chart
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('chart.produk.index') }}" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Chart Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chart.user.index') }}" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Chart User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chart.rc.index') }}" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Chart Review</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('jp.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mp.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Merk Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kt.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('imgpr.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Image Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('infopr.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Informasi Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('review.index.admin') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Review Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('komentar.index.admin') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Komentar Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('imagebrand.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Image Brand</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-spray-can-sparkles"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-plus"></i>
                        <p>Tambah Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengunjung.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-large"></i>
                        <p>Profile</p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>