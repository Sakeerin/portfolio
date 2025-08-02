<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['school', 'degree', 'major', 'start_year', 'end_year'];

    public function run()
    {
        Education::truncate();
        Education::create([
            'school' => 'Wuxi Institute of Technology',
            'degree' => 'Bachelor',
            'major' => 'Software Technology',
            'start_year' => '2017',
            'end_year' => '2020',
        ]);
        Education::create([
            'school' => 'Walailak University',
            'degree' => 'Bachelor',
            'major' => 'Software Engineering',
            'start_year' => '2013',
            'end_year' => '2017',
        ]);
    }
}

