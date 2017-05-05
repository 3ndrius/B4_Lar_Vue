<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;


class PagesController extends Controller
{
    //
    public function getIndex() {

      $posts = Post::orderBy('id', 'desc')->paginate(9);
      $tags = Tag::all();

      return view('pages.index')->withPosts($posts)->withTags($tags);
    }

    public function getshowTag($id) {

      $tag = Tag::find($id);

      return view('pages.showtag')->withTag($tag);
    }



    public function getIT() {

      return view('pages.it');
    }
    public function getNews() {

      return view('pages.news');
    }
}
