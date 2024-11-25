<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';

    protected $fillable = [
        'ticket_name',
        'ticket_price',
        'description',
        'categories',
        'event_date',
        'location',
        'link_location',
        'poster_url', // Make sure this is included
        'is_active'
    ];


    // protected $fillable = [
    //     'ticket_name', 'ticket_price', 'description', 'poster_url', 'categories', 'event_date', 'location', 'link_location'
    // ];

    // Relasi ke ticket type
    // public function ticketType()
    // {
    //     return $this->belongsTo(TicketType::class);
    // }

    // // Relasi ke user
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // // Relasi ke order
    // public function order()
    // {
    //     return $this->belongsTo(Order::class);
    // }
}