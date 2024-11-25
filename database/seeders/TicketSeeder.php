<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $events = [
            [
                'ticket_name' => 'IZ*ONE, One The Story',
                'description' => 'The story of 12 people becoming one. The story of a dream come true. All the moments that shined because we were together. Our story will continue because we are together. ONE, THE STORY',
                'ticket_price' => 897000,
                'categories' => 'Music',
                'location' => 'Online',
                'event_date' => '2021-03-13',
                'link_location' => 'TBA',
                'poster_url' => 'https://i.redd.it/pz264kxsvfn61.jpg',
            ],
            [
                'ticket_name' => 'Wonderland | JKT48 13th Anniversary Concert & Sousenkyo Announcement',
                'description' => 'Konser ulang tahun ke-13 JKT48 sekaligus Pengumuman Pemilihan Member Single ke-16',
                'ticket_price' => 4800000,
                'categories' => 'Music',
                'location' => 'Indonesia Arena, Gelora Bung Karno Sports Complex, Jakarta.',
                'link_location' => 'https://maps.app.goo.gl/w4Ykhzm6n8f8bVAh8',
                'poster_url' => 'https://jkt48.com/upload/news/670bc37a5c025.jpg',
                'event_date' => '2024-12-15'
            ]
        ];
        DB::table('ticket')->insert($events);
    }
}
