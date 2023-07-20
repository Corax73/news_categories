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
        return $this->hasOneThrough(Category::class, CategoryParenting::class, 'category_id', 'id', 'id', 'parent_id');
    }

    /**
     * returns data by children's
     * @return Relation
     */
    public function whoChildrens():Relation
    {
        return $this->hasOneThrough(Category::class, CategoryParenting::class, 'parent_id', 'id', 'id', 'category_id');
    }

    /**
     * returns data by items
     * @return Relation
     */
    public function whatItems():Relation
    {
        return $this->belongsToMany(Item::class, 'category_memberships', 'category_id', 'item_id');
    }
}
