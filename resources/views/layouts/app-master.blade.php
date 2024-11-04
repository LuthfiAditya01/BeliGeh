<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example Â· Bootstrap v5.1</title>
      @vite('resources/css/app.css')
    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}

    {{-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> --}}

    
    <!-- Custom styles for this template -->
    {{-- <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet"> --}}
</head>
<body class="bg-gray-50 dark:bg-[#15132c] text-gray-800 dark:text-white">
    
    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white mt-10 animate-fade-up animate-duration-[2000ms] animate-delay-1000 animate-ease-out">
      <div class="max-w-screen-xl mx-auto p-4 text-center">
          <p>&copy; 2024 BeliGeh. All Rights Reserved.</p>
          <div class="space-x-4 mt-2">
              <a href="#" class="hover:text-blue-400 transition-all duration-500 ease-out ">Privacy Policy</a>
              <a href="#" class="hover:text-blue-400 transition-all duration-500 ease-out ">About Us</a>
              <a href="#" class="hover:text-blue-400 transition-all duration-500 ease-out ">Terms of Service</a>
              <a href="#" class="hover:text-blue-400 transition-all duration-500 ease-out ">Contact Us</a>
          </div>
      </div>
  </footer>


    {{-- <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script> --}}
      
  </body>
</html>