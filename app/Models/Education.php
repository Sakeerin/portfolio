<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['school', 'degree', 'major', 'start_year', 'end_year'];
}

