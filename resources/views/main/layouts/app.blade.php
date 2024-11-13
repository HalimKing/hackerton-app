
    @include('main.layouts.includes.header')

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Life-Hub</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{ route('/') }}" class="active">Home</a></li>
                      <li><a href="{{ route('education.index') }}">Education</a></li>
                      <li><a href="#">Health</a></li>
                      <li><a href="{{ route('employment') }}">Employment</a></li>
                      @if (Auth::user())
                      <li><form action="{{ route('logout.user') }}" method="post">
                        @csrf
                        <input type="submit" value="logout" class="logout-btn btn btn-danger d-inline" >
                      </form></li>
                      <li><a href="javascipt:void(0)"> <button class="btn text-light">{{ Auth::user()->name  }}</button></a></li>
                      
                      @else

                      <li><a href="{{ route('user.auth.register') }}"><i class="fa fa-lock"></i> <button class="btn text-light">Register'</button></a></li>
                      @endif
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
    @yield('content')

@include('main.layouts.includes.footer')




