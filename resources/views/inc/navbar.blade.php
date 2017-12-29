<div class="container-fluid">
        <header>
                  <!--<img src="" alt="logo to come">
                -->
                <div class="navbar">
              <div class="name navbar-header">
                  <a href="/" class="navbar-brand"><span style="color:black;font-size:26px;">Col</span><span style="color:#1ec87e;font-size:23px;">Sheet</span></a>
              </div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                    <i class="fa fa-bars" style="color:#1ec87e;size:100%;" aria-hidden="true"></i>
             </button>
             <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a class="header-b" href="{{ route('login') }}"><button class="header-buttons btn" >Login</button></a></li>
                    <li><a class="header-b" href="{{ route('register') }}"><button class="header-buttons btn" >Register</button></a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle header-b" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                       <button class="header-buttons btn"> {{ Auth::user()->name }} <span class="caret"></span> </button>
                    </a>
                    

                    <ul class="dropdown-menu">
                        <!--User added Dashboard link -->
                        <li>
                          <a href="/home" >Dashboard</a>
                        </li>
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
                <li><a class="header-b" href="/about"><button class="header-buttons btn" >About</button></a></li>
                <li><a class="header-b" href="/contact"><button class="header-buttons btn" >Contact</button></a></li>
                </ul>
            </div>
        </header>
    </div>