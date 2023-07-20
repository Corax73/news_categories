<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Item extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
    ];

    /**
     * returns data by category
     * @return Relation
     */
    public function whatCategory():Relation
    {
        return $this->hasOneThrough(Category::class, CategoryMembership::class, 'item_id', 'id', 'id', 'category_id');
    }

    /**
     * returns data by parent
     * @return Relation
     */
    public function tagNames():Relation
    {
        return $this->belongsToMany(
            Tag::class,
            'tag_for_items', 'item_id', 'tag_id'
        );
    }
}
