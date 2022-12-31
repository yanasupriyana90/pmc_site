<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_1 extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'subtitle',
        'description_1',
        'description_2',
        'description_3',
        'primacy_1',
        'primacy_2',
        'primacy_3',
        'image',
    ];
}
