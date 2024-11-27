<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siteUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'password_confirmation',
        'avatar',
    ];
}