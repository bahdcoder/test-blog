<?php

namespace Blog\Http\Controllers;

use Blog\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function show($name)
  {
    $category= Category::where('name', $name)->first();

    $posts = $category->posts;
    return view('category')
      ->with('category', $category)
      ->with('posts', $posts);
  }
}
