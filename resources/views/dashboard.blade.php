<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeliGeh!</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 dark:bg-[#15132c] text-gray-800 dark:text-white">
    <!-- Navbar -->
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
                    <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Home</a></li>
                    <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">About</a></li>
                    <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Services</a></li>
                    <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Pricing</a></li>
                    <li><a href="#" class="block py-2 px-3 md:p-0 hover:text-blue-600 transition-all duration-500 ease-out">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[600px] animate-fade-up animate-duration-[2000ms] animate-ease-out" style="background-image: url('{{ asset('assets/img/hero-bg.jpg') }}'); background-position: center bottom;">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white space-y-4">
                <h1 class="text-4xl md:text-5xl font-bold drop-shadow-2xl font-mono">Welcome to BeliGeh!</h1>
                <p class="text-lg drop-shadow-2xl font-serif">Explore the best events, services, and offers we have for you!</p> <br>
                <a href="#carouselExample" class="bg-blue-600 hover:bg-blue-700 px-6 py-2 rounded-lg transition-all duration-500 ease-out ">Explore Now</a>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <div class="px-10 mt-10 animate-fade-up animate-duration-[2000ms] animate-delay-500 animate-ease-out">
        <div id="carouselExample" class="relative w-full overflow-hidden">
            <div class="flex transition-transform duration-700 ease-in" style="transform: translateX(0);">
                <!-- Item 1 -->
                <a href="/page3" class="w-full flex-shrink-0 p-4">
                    <div class="rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('assets/img/izone_one_the_story.jpg') }}" class="w-full h-96 object-cover" alt="IZ*ONE">
                        <div class="p-4 bg-white">
                            <h3 class="text-xl text-gray-600 font-semibold">IZ*ONE One The Story</h3>
                            <p class="mt-2 text-gray-600">The story of 12 people becoming one.
                                The story of a dream come true.
                                All the moments that shined because we were together.
                                Our story will continue because we are together.
                                ONE, THE STORY</p>
                        </div>
                    </div>
                </a>
                
                <!-- Item 2 -->
                <a href="/page2" class="w-full flex-shrink-0 p-4">
                    <div class="rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('assets/img/Premier_League.webp') }}" class="w-full h-96 object-cover" alt="Premier League">
                        <div class="p-4 bg-white">
                            <h3 class="text-xl text-gray-600 font-semibold">Premier League Online Streaming</h3>
                            <p class="mt-2 text-gray-600">Streaming eksklusif Premier League</p>
                        </div>
                    </div>
                </a>
                
                <!-- Item 3 -->
                <a href="/page1" class="w-full flex-shrink-0 p-4">
                    <div class="rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('assets/img/JKT48_13th_Concert.jpg') }}" class="w-full h-96 object-cover" alt="JKT48">
                        <div class="p-4 bg-white">
                            <h3 class="text-xl text-gray-600 font-semibold">JKT48 13th Anniversary Concert</h3>
                            <p class="mt-2 text-gray-600">Konser ulang tahun ke-13 JKT48 sekaligus Pengumuman Pemilihan Member Single ke-26</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carousel Controls -->
            <button id="prev" class="absolute top-1/2 -left-0 bg-white p-2 rounded-full transform -translate-y-1/2">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black   ">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="next" class="absolute top-1/2 -right-0 bg-white p-2 rounded-full transform -translate-y-1/2">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Footer -->
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

    <script>
        const carousel = document.querySelector('#carouselExample > div');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let currentIndex = 0;

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < carousel.children.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

        function updateCarousel() {
            const offset = -carousel.children[currentIndex].offsetWidth * currentIndex;
            carousel.style.transform = `translateX(${offset}px)`;
        }
    </script>
</body>

</html>
