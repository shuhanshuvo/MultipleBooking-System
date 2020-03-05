<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_name', 'amenti', 'no_bed', 'no_bath', 'no_person', 'img', 'payment', 'overview', 'htl_id',
    ];
}
