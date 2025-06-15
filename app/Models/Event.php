<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Not strictly necessary for default casting

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_date',
        'artist_name',
        'venue',
        'city_state',
        'description'
    ];
}
