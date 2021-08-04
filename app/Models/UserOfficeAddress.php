<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOfficeAddress extends Model
{
    use HasFactory;

    protected $table = 'user_office_address';

    protected $fillable = [
        'name',
        'city',
        'area',
        'street',
        'house',
        'info'
    ];
}
