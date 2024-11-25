@extends('layouts.app-master')

@section('content')
    <div class="bg-light rounded">
        {{-- <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a> --}}
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
                    <div class="carousel-container flex transition-transform duration-700 ease-in-out">
                        @foreach ($ticket as $ticket)
                        <div class="carousel-item w-full flex-shrink-0 p-4">
                            <a href="/ticket/{{$ticket->id}}">
                                <div class="rounded-lg shadow-lg overflow-hidden">
                                    <img src="{{ $ticket->poster_url }}" class="w-full h-96 object-cover" alt="Event Image">
                                    <div class="p-4 bg-white">
                                        <h3 class="text-xl text-gray-600 font-semibold">{{$ticket->ticket_name}}</h3>
                                        <p class="mt-2 text-gray-600">{{$ticket->description}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
    
                    <button id="prev" class="absolute top-1/2 left-2 bg-white p-2 rounded-full transform -translate-y-1/2 shadow-lg z-10">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="next" class="absolute top-1/2 right-2 bg-white p-2 rounded-full transform -translate-y-1/2 shadow-lg z-10">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carouselContainer = document.querySelector('.carousel-container');
            const carouselItems = document.querySelectorAll('.carousel-item');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');

            if (!carouselItems.length) {
                console.error('No carousel items found');
                return;
            }

            let currentIndex = 0;

            // Sembunyikan tombol prev di awal jika di item pertama
            prevButton.style.display = currentIndex === 0 ? 'none' : 'block';
            // Sembunyikan tombol next jika hanya ada 1 item
            nextButton.style.display = carouselItems.length === 1 ? 'none' : 'block';

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentIndex < carouselItems.length - 1) {
                    currentIndex++;
                    updateCarousel();
                }
            });

            function updateCarousel() {
                const offset = -100 * currentIndex;
                carouselContainer.style.transform = `translateX(${offset}%)`;
                
                // Update visibility tombol
                prevButton.style.display = currentIndex === 0 ? 'none' : 'block';
                nextButton.style.display = currentIndex === carouselItems.length - 1 ? 'none' : 'block';
            }
        });
    </script>
@endsection