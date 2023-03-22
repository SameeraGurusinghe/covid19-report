<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidData extends Model
{
    use HasFactory;

    protected $table = 'covid19_data';

    protected $fillable = [
        'new_cases',
        'total_cases',
        'new_deaths',
        'total_deaths',
        'new_recovered',
        'total_recovered',
        'patient_in_hospitals',
        'date',
    ];
}