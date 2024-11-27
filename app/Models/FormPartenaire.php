<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPartenaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'nomcompany',
        'image',
        'numerocompany',
        'pays',
        'numero',
        'ville',
        'motif',
        'contenu',
    ];
}