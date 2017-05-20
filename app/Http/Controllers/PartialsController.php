<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Comment;


class PartialsController extends Controller
{
    //

public function getIndex() {

        $posts = Post::orderBy('id', 'desc')->paginate(9);
        $tags = Tag::all();
        $categories = Category::all();

        $comments = Comment::orderBy('id', 'desc')->paginate(6);

        return view('partials._footer_content')->withPosts($posts)->withTags($tags)->withComments($comments)->withCategories($categories);
      }
  }
