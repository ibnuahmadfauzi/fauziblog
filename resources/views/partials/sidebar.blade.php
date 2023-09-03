{{-- Sidebar --}}
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



    {{-- Menu for Brand --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-blog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">FauziBlog</div>
    </a>
    {{-- end Menu for Brand --}}



    {{-- Menu for Dashboard --}}
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    {{-- end Nav Item - Dashboard --}}
    {{-- end Menu for Dashboard --}}



    {{-- Horizontal Line in Sidebar --}}
    <hr class="sidebar-divider">
    {{-- end Horizontal Line in Sidebar --}}



    {{-- Menu for Content Management --}}
    {{-- Heading Menu for Content Management --}}
    <div class="sidebar-heading">
        Content Management
    </div>
    {{-- end Heading Menu for Content Management --}}



    {{-- Nav Item - Posts --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts"
            aria-expanded="true" aria-controls="collapsePosts">
            <i class="fas fa-sticky-note"></i>
            <span>Posts</span>
        </a>
        <div id="collapsePosts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item d-flex justify-content-between align-items-center" href="buttons.html">
                    <span>All Posts</span><i class="fas fa-sticky-note"></i>
                </a>
                <a class="collapse-item d-flex justify-content-between align-items-center" href="cards.html">
                    <span>New Post</span><i class="fas fa-edit"></i>
                </a>
            </div>
        </div>
    </li>
    {{-- end Nav Item - Posts --}}

    {{-- Nav Item - Categries --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
            aria-expanded="true" aria-controls="collapseCategories">
            <i class="fas fa-tags"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item d-flex justify-content-between align-items-center" href="buttons.html">
                    <span>All Categories</span><i class="fas fa-tags"></i>
                </a>
                <a class="collapse-item d-flex justify-content-between align-items-center" href="cards.html">
                    <span>New Category</span><i class="fas fa-edit"></i>
                </a>
            </div>
        </div>
    </li>
    {{-- end Nav Item - Categories --}}

    {{-- Nav Item - Pages --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-pager"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item d-flex justify-content-between align-items-center" href="buttons.html">
                    <span>All Pages</span><i class="fas fa-pager"></i>
                </a>
                <a class="collapse-item d-flex justify-content-between align-items-center" href="cards.html">
                    <span>New Page</span><i class="fas fa-edit"></i>
                </a>
            </div>
        </div>
    </li>
    {{-- end Nav Item - Pages --}}
    {{-- end Menu for Content Management --}}



    {{-- Horizontal Line in Sidebar --}}
    <hr class="sidebar-divider">
    {{-- end Horizontal Line in Sidebar --}}



    {{-- Menu for Interactions --}}
    {{-- Heading Menu for Interactions --}}
    <div class="sidebar-heading">
        Interaction
    </div>
    {{-- end Heading Menu for Interactions --}}

    {{-- Nav Item - Comments --}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-comments"></i>
            <span>Comments</span>
        </a>
    </li>
    {{-- end Nav Item - Comments --}}

    {{-- Nav Item - Messages --}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-envelope"></i>
            <span>Messages</span>
        </a>
    </li>
    {{-- end Nav Item - Messages --}}
    {{-- end Menu for Interactions --}}



    {{-- Horizontal Line in Sidebar --}}
    <hr class="sidebar-divider">
    {{-- end Horizontal Line in Sidebar --}}



    {{-- Menu for User Managment --}}
    {{-- Heading Menu for User Managment --}}
    <div class="sidebar-heading">
        User Managment
    </div>
    {{-- end Heading Menu for User Managment --}}

    {{-- end Menu for User Managment --}}

    {{-- Nav Item - User Managements --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUserManagements"
            aria-expanded="true" aria-controls="collapseUserManagements">
            <i class="fas fa-sticky-note"></i>
            <span>User Managements</span>
        </a>
        <div id="collapseUserManagements" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item d-flex justify-content-between align-items-center" href="buttons.html">
                    <span>All Users</span><i class="fas fa-users"></i>
                </a>
                <a class="collapse-item d-flex justify-content-between align-items-center" href="cards.html">
                    <span>New User</span><i class="fas fa-edit"></i>
                </a>
            </div>
        </div>
    </li>
    {{-- end Nav Item - User Managements --}}
    {{-- end Menu for User Managment --}}



    {{-- Horizontal Line in Sidebar --}}
    <hr class="sidebar-divider">
    {{-- end Horizontal Line in Sidebar --}}



    {{-- Menu for General --}}
    {{-- Heading Menu for General --}}
    <div class="sidebar-heading">
        General
    </div>
    {{-- end Heading Menu for General --}}

    {{-- Nav Item - Layouts --}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-object-ungroup"></i>
            <span>Layouts</span>
        </a>
    </li>
    {{-- end Nav Item - Layouts --}}

    {{-- Nav Item - Themes --}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-palette"></i>
            <span>Themes</span>
        </a>
    </li>
    {{-- end Nav Item - Themes --}}

    {{-- Nav Item - Settings --}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
        </a>
    </li>
    {{-- end Nav Item - Settings --}}
    {{-- end Menu for General --}}



    {{-- Horizontal Line in Sidebar --}}
    <hr class="sidebar-divider">
    {{-- end Horizontal Line in Sidebar --}}



    {{-- Sidebar Toggle Menu --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    {{-- end Sidebar Toggle Menu --}}
</ul>
{{-- end Sidebar --}}
