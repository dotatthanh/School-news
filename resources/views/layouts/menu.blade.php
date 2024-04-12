<div class="vertical-menu">

    <div data-simplebar="" class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Quản lý</li>

                <li>
                    <a href="{{ route('dashboard') }}" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>

                @can('Xem danh sách phòng học')
                <li>
                    <a href="{{ route('rooms.index') }}" class=" waves-effect">
                        <i class="bx bx-home-alt"></i>
                        <span>Phòng học</span>
                    </a>
                </li>
                @endcan

                @can('Xem danh sách thời khóa biểu')
                <li>
                    <a href="{{ route('schedule.index') }}" class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Thời khóa biểu</span>
                    </a>
                </li>
                @endcan

                @can('Xem danh sách mượn phòng')
                    <li>
                        <a href="{{ route('booking-room.index') }}" class=" waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span>Mượn phòng</span>
                        </a>
                    </li>
                @endcan

                @can('Xem danh sách trả phòng')
                    <li>
                        <a href="{{ route('pay-room.index') }}" class=" waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span>Trả phòng</span>
                        </a>
                    </li>
                @endcan

                @can('Xem danh sách lớp học')
                <li>
                    <a href="{{ route('classes.index') }}" class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span>Lớp học</span>
                    </a>
                </li>
                @endcan

                @can('Xem danh sách sinh viên')
                <li>
                    <a href="{{ route('students.index') }}" class=" waves-effect">
                        <i class="bx bx bx-user"></i>
                        <span>Sinh viên</span>
                    </a>
                </li>
                @endcan

                @can('Xem danh sách tài khoản')
                    <li>
                        <a href="{{ route('users.index') }}" class=" waves-effect">
                            <i class="bx bx bx-user"></i>
                            <span>Tài khoản</span>
                        </a>
                    </li>
                @endcan

                @can('Xem danh sách vai trò', 'Xem danh sách quyền')
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-cog"></i><span class="badge rounded-pill bg-success float-end">02</span>
                        <span>Cài đặt</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('Xem danh sách vai trò')
                        <li><a href="{{ route('roles.index') }}">Vai trò</a></li>
                        @endcan
                        @can('Xem danh sách quyền')
                        <li><a href="{{ route('permissions.index') }}">Quyền</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>