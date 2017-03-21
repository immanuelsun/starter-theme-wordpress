<header class="navbar navbar-brand-centered navbar-toggleable-md navbar-light">
  <nav class="container">
    <a href="#" class="navbar-toggler mr-2" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></a>

    <a class="navbar-brand" href="{{ home_url('/') }}">
      {{ get_bloginfo('name', 'display') }}
    </a>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">      
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      <ul class="navbar-nav ml-auto">
        {!! do_action('stubby_user_nav') !!}
        @if (!is_user_logged_in())
          <li class="nav-item">
            <a href="{{ wp_login_url() }}" class="nav-link">
              <i class="fa fa-sign-in"></i>
              <span>Login</span>
            </a>
          </li>
        @else
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ wp_get_current_user()->display_name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
              <a class="dropdown-item" href="{{ wp_logout_url() }}">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        @endif
      </ul>
    </div>
  </nav>
</header>