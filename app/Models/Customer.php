<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;

    function getNameAttribute($value)
    {
        // Gets name value and can be manipulated
        // Accessor
        return "hello there " . $value;
    }

    // Mutator
    function setEmailAttribute($value) 
    {
        if(strstr($value, "@gmail.com")){
            $value = $value . "@gmail.com";
        }
        // Adds @gmail.com if it doesn't already
        $this->attributes['email'] = $value . "@gmail.com";
    }
}
