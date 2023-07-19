<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];
    
    /**
     * returns data by parent
     * @return Relation
     */
    public function whoParent():Relation
    {
        return $this->hasOneThrough(Category::class, CategoryParenting::class, 'category_id', 'id');
    }
}
