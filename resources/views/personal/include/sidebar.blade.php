<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar" >
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion>
            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                        Liked
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fa-sharp fa-light fa-layer-group"></i>
                        <p>
                            Comments
                        </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
