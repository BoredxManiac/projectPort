<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Filter;

class Website extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'filter',
    ];

}

