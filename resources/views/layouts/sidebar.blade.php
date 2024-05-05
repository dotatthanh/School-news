<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Manage</li>

                <li>
                    <a href="{{ route('categories.index') }}" class=" waves-effect">
                        <i class="bx bx-news"></i>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('sub-categories.index') }}" class=" waves-effect">
                        <i class="bx bx-news"></i>
                        <span>Sub Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('news.index') }}" class=" waves-effect">
                        <i class="bx bx-news"></i>
                        <span>News</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->
