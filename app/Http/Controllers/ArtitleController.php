<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() : View
    {
        $articles = Article::paginate(9);
        return view('articles.index', compact('articles'));
    }
}
