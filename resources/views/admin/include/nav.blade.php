<div class="site-sidebar" style="height:100vh;">
  <div class="custom-scroll custom-scroll-light">
    <ul class="sidebar-menu">
      <li class="menu-title">Admin</li>
      <li>
        <a href="" class="waves-effect waves-light">
          <span class="s-icon"><i class="ti-anchor"></i></span>
          <span class="s-text">Dashboard</span>
        </a>
      </li>
     
      <li class="compact-hide">
        <a href="{{ url('/admin/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
          <span class="s-icon"><i class="ti-power-off"></i></span>
          <span class="s-text">Logout</span>
                </a>

                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
      </li>
      
    </ul>
  </div>
</div>