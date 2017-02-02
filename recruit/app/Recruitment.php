<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    //
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='recruitment';
    protected $fillable = [
        'title', 'image', 'description','position','address_work','requirement','benefit','deadline','created_at',
    ];
    protected $timestamp=true;
}
