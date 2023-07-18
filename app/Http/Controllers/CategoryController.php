<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Faker\Generator as Faker;

class CategoryController extends Controller
{
    /**
     * unloading categories, displaying parents in the template
     * @return view
     */
    public function index():view
    {
        $page = request()->get('page', 1);
        $limit = request()->get('limit', 10);
        if (Cache::has('categories')) {
            $categories = Cache::get('categories');
        } else {
            $seconds = 300;
            $categories = Cache::remember('categories' . $page, $seconds, function() use ($limit){
                return Category::paginate($limit);
            });
        }
        return view('category.categories', [
            'categories' => $categories
        ]);
    }
}
