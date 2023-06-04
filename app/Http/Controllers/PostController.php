<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {

        $newPosts = Post::orderBy("created_at", "desc")->limit(5)->get();
        $popularPosts = Post::orderBy("views", "desc")->limit(10)->get();
        $highLightPosts =  Post::where("highlight", 1)->orderBy("created_at", "desc")->limit(8)->get();
        $hotPosts =  Post::where("is_hot", 1)->orderBy("created_at", "desc")->limit(8)->get();

        // lấy các bài đăng của danh mục bằng id danh mục cha (xã hội)
        $category1 =  Post::whereHas(
            'category',
            function ($query) {
                $query->where('parent_id', 2);
            }
        )->orderBy("created_at", "desc")->limit(3)->get();
        $tags =  Tag::orderBy("id", "desc")->limit(30)->get();


        // lấy danh mục thế giới
        $category2 =  Post::whereHas(
            'category',
            function ($query) {
                $query->where('parent_id', 1);
            }
        )->orderBy("created_at", "desc")->limit(5)->get();


        $tags =  Tag::orderBy("id", "desc")->limit(30)->get();
        return view('home.index', compact('newPosts', 'highLightPosts', 'hotPosts', 'tags', 'category1', 'popularPosts', 'category2'));
    }



    public function show($id)
    {

        $post = Post::where('slug', $id)->first();
        $listNameTags = $post->tags->pluck("title");
        // tìm kiếm tin tức liên quan
        $postRelated = [];
        if (count($listNameTags) >  0) {
            $postRelated = Post::where('slug', '!=', $id)
                ->where(function ($query) use ($listNameTags) {
                    foreach ($listNameTags as $key => $name) {
                        $query->orWhere('title', 'like', '%' . $name . '%');
                    }
                })
                ->orderBy('created_at', 'desc')->limit(10)->get();
        }

        $tags =  Tag::orderBy("id", "desc")->limit(30)->get();
        $parentCategory = Category::find($post->category->parent_id);

        // tăng lưỢt xem và lưu trữ bài đăng đã xem gầN đây
        if (!Session::has('post_viewed_' . $post->id)) {
            $this->updateView($post);
        }
        return view('detail.index', compact('post', 'parentCategory', 'tags', 'postRelated'));
    }

    public function updateView($post)
    {
        if (Auth::user()) {
            $userID = Auth::user()->id;
            $exists = User::find($userID)->recentPosts()->wherePivot('post_id', $post->id)->exists();
            if (!$exists) {
                $post->recentPosts()->sync($userID);
            }
        }

        $post->views += 1;
        $post->save();
        Session::put('post_viewed_' . $post->id, true);
    }


    public function search($keyword)
    {
        $posts = [];

        if ($keyword != "") {
            $posts = Post::where("title", 'like', '%' . $keyword . '%')->orderBy('created_at', 'desc')->paginate(20);
        }
        return view('search.index', compact('posts',   'keyword'));
    }
}
