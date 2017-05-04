<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
class BlogController extends Controller
{

    public function index()
    {
      $posts = Post::paginate(5);
      $tags = Tag::all();
      return view('blog.index')->withPosts($posts)->withTags($tags);

    }

    public function show($slug)
    {

      $post = Post::where('slug', '=', $slug)->first();
      return view('blog.single')->withPost($post);

    }

}
