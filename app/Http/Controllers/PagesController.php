<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Comment;
use App\Category;


class PagesController extends Controller
{
    //
    public function getIndex() {

      $posts = Post::orderBy('id', 'desc')->paginate(9);
      $tags = Tag::all();
      $categories = Category::all();

      $comments = Comment::orderBy('id', 'desc')->paginate(6);

      return view('pages.index')->withPosts($posts)->withTags($tags)->withComments($comments)->withCategories($categories);
    }

    public function getshowTag($name) {

      $tag = Tag::find($name);
      $tag = Tag::where('name', '=', $name)->first();
      $categories = Category::all();
      $tags = Tag::all();

      return view('pages.showtag')->withTag($tag)->withCategories($categories)->withTags($tags);

      

    }



    public function getIT() {

      return view('pages.it');
    }
    public function getNews() {

      return view('pages.news');
    }
}
