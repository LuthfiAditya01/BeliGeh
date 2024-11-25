{{-- <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
  
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
  </header> --}}

<nav class="bg-white border-gray-200 dark:bg-gray-600 shadow-lg rounded-b-lg">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
      <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
          <img src="{{ asset('assets/img/logoNoBg.png') }}" class="h-8" alt="Flowbite Logo" />
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col md:flex-row md:space-x-8">
              <li><a href="/" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Home</a></li>
              <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">About</a></li>
              <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Services</a></li>
              <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Pricing</a></li>
              {{-- <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Login</a></li> --}}
              @auth
                {{auth()->user()->name}}
                <li><a href="{{ route('logout.perform') }}" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Logout</a></li>
              @endauth
              @guest                
                <li><a href="{{ route('login.perform') }}" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Login</a></li>
                <li><a href="{{ route('register.perform') }}" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Sign-up</a></li>
              @endguest
            </ul>
      </div>
  </div>
</nav>