@extends('layouts.app-master')

@section('content')
<div class="flex items-center justify-center h-full">
    <div class="w-full max-w-6xl p-6 bg-white shadow-md rounded-lg">
     <div class="flex flex-col">
      <div class="w-full">
       <img alt="Poster of the event showing a vibrant and colorful design with event details" class="rounded-lg shadow-md w-full" src="{{ ticket. }}"/>
      </div>
      <div class="mt-6">
       <h1 class="text-3xl font-bold text-gray-800">
        Wonderland | JKT48 13th Anniversary Concert & Sousenkyo Announcement
       </h1>
       <p class="text-xl text-gray-600 mt-2">
        Rp 4.800.000
       </p>
       <p class="text-gray-700 mt-4">
        The Konser ulang tahun ke-13 JKT48 dan Pengumuman Pemilihan Member Single ke-26
       </p>
       <div class="mt-4">
        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">
         Music
        </span>
       </div>
       <div class="mt-4">
        <p class="text-gray-600">
         <i class="fas fa-calendar-alt mr-2">
         </i>
         15th December 2024
        </p>
        <p class="text-gray-600 mt-2">
         <i class="fas fa-map-marker-alt mr-2">
         </i>
         Indonesia Arena, Gelora Bung Karno Sports Complex, Jakarta.
        </p>
       </div>
       <div class="mt-6">
        <a class="text-blue-500 hover:underline" href="https://maps.app.goo.gl/w4Ykhzm6n8f8bVAh8" target="_blank">
         View Location on Map
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
@endsection