<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $table="ratings";
    protected $primaryKey="id";
    protected $fillable=[
        'user_id',
        'pkg_id',
        'htl_id',
        'lounge_id',
        'rentcar_id',
        'pickup_id',
    ];

}
