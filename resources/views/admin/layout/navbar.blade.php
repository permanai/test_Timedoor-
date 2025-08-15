<ul class="list-unstyled topnav-menu float-right mb-0">
    <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="{{asset('../assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
            <span class="pro-user-name ml-1">
                @if(Auth::check())
                    {{ Auth::user()->name }}
                @else
                    Guest
                @endif
                <i class="mdi mdi-chevron-down"></i>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
            <a href="#" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fe-log-out"></i>
                <span>Logout</span>
            </a>
        </div>
    </li>
</ul>