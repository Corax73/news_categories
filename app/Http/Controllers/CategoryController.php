<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    /**
     * main page output
     * @return view
     */
    public function main():view
    {
        return view('category.main');
    }

    /**
     * unloading categories, displaying parents in the template
     * @return view
     */
    public function index():view
    {
        $page = request()->get('page', 1);
        $limit = request()->get('limit', 10);
        $seconds = 300;
        $categories = Cache::remember('categories' . $page, $seconds, function() use ($limit){
            return Category::paginate($limit);
        });
        return view('category.categories', [
            'categories' => $categories
        ]);
    }

    /**
     * unloading items, displaying tags and categories in the template
     * @return view
     */
    public function items():view
    {
        $page = request()->get('page', 1);
        $limit = request()->get('limit', 10);
        $seconds = 300;
        $items = Cache::remember('items' . $page, $seconds, function() use ($limit){
            return Item::paginate($limit);
        });
        return view('category.items', [
            'items' => $items
        ]);
    }
}
