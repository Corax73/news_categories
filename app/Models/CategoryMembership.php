<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMembership extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'item_id'
    ];
}
