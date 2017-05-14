<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Comment;


class PagesController extends Controller
{
    //
    public function getIndex() {

      $posts = Post::orderBy('id', 'desc')->paginate(9);
      $tags = Tag::all();

      $comments = Comment::orderBy('id', 'desc')->paginate(6);

      return view('pages.index')->withPosts($posts)->withTags($tags)->withComments($comments);
    }

    public function getshowTag($name) {

      $tag = Tag::find($name);
      $tag = Tag::where('name', '=', $name)->first();

      return view('pages.showtag')->withTag($tag);
    }



    public function getIT() {

      return view('pages.it');
    }
    public function getNews() {

      return view('pages.news');
    }
}
