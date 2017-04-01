<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CategoryController extends Controller
{

  public function index()
  {
      $categories = Category::all();

      return view('categories.index')->withCategories($categories);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $this->validate($request, [
        'name'=> 'required|max:255'
      ]);
      $category = new Category;

      $category->name =  $request->name;
      $category->save();

      return redirect()->route('categories.index');
  }

  public function destroy($id)
  {
      //

      $category = Category::find($id);

      $category->delete();
      return redirect()->route('categories.index');
  }


}
