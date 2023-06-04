<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        return view('category.index');
    }
    public function show($id)
    {
        $category = Category::where('slug', $id)->first();
        $popularPosts = [];
        if ($category->parent_id == null) {
            $popularPosts = $category->posts()->orderBy("views", "desc")->limit(10)->get();
        } else {
            $popularPosts = $category->post()->orderBy("views", "desc")->limit(10)->get();
        }


        $posts = [];
        if ($category->parent_id == null) {
            $posts = Post::whereIn('category_id', function ($query) use ($category) {
                $query->select('id')
                    ->from('categories')
                    ->where('parent_id', $category->id);
            })
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(10);
        }



        return view('category.posts_show', compact('category', 'posts', 'popularPosts'));
    }
}
