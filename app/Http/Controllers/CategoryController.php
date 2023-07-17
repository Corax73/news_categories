<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * unloading categories, displaying parents in the template
     * @return view
     */
    public function index():view
    {
        $categories = Category::all();
        return view('category.categories', [
            'categories' => $categories
        ]);
    }
}
