<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'htl_name', 'amenti', 'phone', 'email', 'address', 'img',
    ];
}
