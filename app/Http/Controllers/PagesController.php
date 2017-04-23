<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PagesController extends Controller
{
    //
    public function getIndex() {

      $posts = Post::orderBy('id', 'asc')->paginate(8);
      return view('pages.index')->withPosts($posts);
    }

    public function getIT() {

      return view('pages.it');
    }
}
