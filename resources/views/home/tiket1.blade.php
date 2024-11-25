@extends('layouts.app-master')

@section('content')
<br>
<div class="flex items-center justify-center h-full animate-fade-up animate-duration-[2000ms] animate-delay-500 animate-ease-out">
    <div class="w-full max-w-6xl p-6 bg-white shadow-md rounded-lg">
        <div class="flex flex-col">
            <div class="w-full">
                <img 
                    alt="Poster of the event showing a vibrant and colorful design with event details" 
                    class="rounded-lg shadow-md w-full" 
                    src="{{ $ticket->poster_url }}"
                />
            </div>
            
            <div class="mt-6">
                <h1 class="text-3xl font-bold text-gray-800">
                    {{ $ticket->ticket_name }}
                </h1>
                
                <p class="text-xl text-gray-600 mt-2">
                    {{ $harga_terformat }}
                </p>
                
                <p class="text-gray-700 mt-4">
                    {{ $ticket->description }}
                </p>
                
                <div class="mt-4">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">
                        {{ $ticket->categories }}
                    </span>
                </div>
                
                <div class="mt-4">
                    <p class="text-gray-600">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        {{ $ticket->event_date }}
                    </p>
                    
                    <p class="text-gray-600 mt-2">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        {{ $ticket->location }}
                    </p>
                </div>
                
                <div class="mt-6 flex justify-between">
                    @if($ticket->link_location=="TBA")
                        <p class="font-bold text-black">To be Announced</p>
                    @else
                        <a 
                        class="font-bold p-3 bg-blue-500 text-white rounded-lg transition-all duration-300 ease-out transform scale-90 hover:bg-transparent hover:text-blue-500 hover:underline hover:border-blue-500 hover:border-2"
                        href="{{ $ticket->link_location }}" 
                        target="_blank"
                        > 
                            View Location on Maps!
                        </a>
                    @endif
                    <a 
                        class="font-bold p-3 bg-blue-500 text-white rounded-lg transition-all duration-300 ease-out transform scale-90 hover:bg-transparent hover:text-blue-500 hover:underline hover:border-blue-500 hover:border-2" 
                        href="/buy/{{$ticket->id}}"
                    > 
                        Book Now!
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection