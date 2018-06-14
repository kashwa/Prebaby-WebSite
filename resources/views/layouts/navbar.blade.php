<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Prebaby</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      @guest
        <a href="{{ route('login') }}" class="w3-bar-item w3-button" style="color:#0f7e9b"><i class="fa fa-user"></i> Login as admin</a>
        @else
          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
      @endguest
      <a href="#about" class="w3-bar-item w3-button" style="color:#0f7e9b">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button" style="color:#0f7e9b"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button" style="color:#0f7e9b"><i class="fa fa-android"></i> APP</a>
      <a href="#pricing" class="w3-bar-item w3-button" style="color:#0f7e9b"><i class="fa fa-file"></i> ARTICLES</a>
      <a href="#contact" class="w3-bar-item w3-button" style="color:#0f7e9b"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>