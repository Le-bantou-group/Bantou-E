<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaires extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'image',
        'email',
        'pays',
        'numero',
        'motif',
        'contenu',
    ];
}