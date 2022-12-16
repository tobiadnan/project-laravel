<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" id="sidebarMenu">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page">
                    <span class="align-text-bottom" data-feather="home"></span>
                    Dashboard
                </a> 
            </li>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link  {{ Request::is('dashboard/blogs') ? 'active' : '' }}">
                    <span class="align-text-bottom" data-feather="file-text"></span>
                    My Blogs
                </a>
            </li>
        </ul>
    </div>
</nav>