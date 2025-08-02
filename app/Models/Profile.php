<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'title', 'about', 'photo', 'email', 'phone', 'address'];
}
