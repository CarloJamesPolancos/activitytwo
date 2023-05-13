<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 smoler">
        <li><a href="{{url('/')}}" class="nav-link px-2 text-white active">Home</a></li>
        <li><a href="{{url('/services')}}" class="nav-link px-2 text-white">Services</a></li>
        <li><a href="{{url('/contact')}}" class="nav-link px-2 text-white">Contact</a></li>
        <li><a href="{{url('/supporters')}}" class="nav-link px-2 text-white">CRUD</a></li>
        <li><a href="{{url('/about')}}" class="nav-link px-2 text-white">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 smoler">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="boton btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="boton btn me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="boton btn">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>