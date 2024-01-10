<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar" >
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion>
            <li class="nav-item">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fa-sharp fa-light fa-layer-group"></i>
                        <p>
                            Categories
                        </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fa-sharp fa-light fa-layer-group"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
