<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
    	'subject',
    	'full_name',
    	'email',
    	'phone_number',
    	'address',
    	'message',
    ];
}
