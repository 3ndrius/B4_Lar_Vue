<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
class BlogController extends Controller
{

    public function index()
    {
      $posts = Post::paginate(5);
      $tags = Tag::all();
      $categories = Category::all();
      return view('blog.index')->withPosts($posts)->withTags($tags)->withCategories($categories);

    }

    public function show($slug)
    {

      $post = Post::where('slug', '=', $slug)->first();
      $categories = Category::all();
      $tags = Tag::all();
      return view('blog.single')->withPost($post)->withCategories($categories)->withTags($tags);


    }



}
