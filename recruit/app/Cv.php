<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    
    protected $table='cv';
    protected $fillable = [
        'name', 'sex', 'birthday','email','phone','address','current_address','target','hobbies','other','status',
    ];
    protected $timestamp=true;
}
