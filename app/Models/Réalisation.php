<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Réalisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_principal',
        'image_sous1',
        'sous_titre1',
        'sous_description1',
        'image_sous2',
        'sous_titre2',
        'sous_description2',
    ];
}