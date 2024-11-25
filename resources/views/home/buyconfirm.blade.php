@extends('layouts.app-master')

@section('content')
<div class="flex my-8 mx-6 rounded-lg   items-center justify-center h-full animate-fade-up animate-duration-[2000ms] animate-delay-500 animate-ease-out bg-top hover:bg-center md:bg-center bg-auto" style="background-image: url({{$id->poster_url}})">
    <div class="w-full max-w-6xl p-6 bg-white shadow-md rounded-lg ">
        <h2 class="text-2xl font-bold text-black mb-6 text-center">Konfirmasi Data Pembelian</h2>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Tiket:</p>
            <p class="text-gray-900">{{$id->ticket_name}}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Lokasi Event:</p>
            <p class="text-gray-900">{{$id->location}}</p><br>
            @if($id->link_location=="TBA")
                        <p class="font-bold text-black">Link is To be Announced, Please Stay Tune 🫶</p>
                    @else
                        <a 
                        class="font-bold p-3 bg-blue-500 text-white rounded-lg transition-all duration-300 ease-out transform scale-90 hover:bg-transparent hover:text-blue-500 hover:underline hover:border-blue-500 hover:border-2"
                        href="{{ $id->link_location }}" 
                        target="_blank"
                        > 
                            View Location on Maps!
                        </a>
                    @endif
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Email:</p>
            <p class="text-gray-900">{{$item['floating_email']}}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Jumlah Tiket:</p>
            <p class="text-gray-900">{{$item['amount_ticket']}}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Nama Depan:</p>
            <p class="text-gray-900">{{$item['floating_first_name']}}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Nama Belakang:</p>
            <p class="text-gray-900">{{$item['floating_last_name']}}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Nomor Handphone:</p>
            <p class="text-gray-900">{{$item['floating_phone']}}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700 text-sm font-bold">Alamat:</p>
            <p class="text-gray-900">{{$item['floating_address']}}</p>
        </div>
        <div class="flex items-center justify-between">
            <form action="{{ route('storeConfirmedTicket') }}" method="POST">
                @csrf
                <input type="hidden" name="ticket_id" value="{{ $id->id }}">
                <button class="font-bold p-3 bg-blue-500 text-white rounded-lg transition-all duration-300 ease-out transform scale-90 hover:bg-transparent hover:text-blue-500 hover:underline hover:border-blue-500 hover:border-2" type="submit">
                    Konfirmasi
                </button>
            </form>
        </div>
    </div>
</div>
@endsection