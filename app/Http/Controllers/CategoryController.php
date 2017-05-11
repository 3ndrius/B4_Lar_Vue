<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Category;

class CategoryController extends Controller
{
  public function __construct() {

        $this->middleware('auth');
    }

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
      Session::flash('success', 'Udało ci się stworzyć nową kategorię !');
      return redirect()->route('categories.index');
  }

  //   public function delete($id) {
  //
  //   $category = Category::find($id);
  //
  //   return view('categories.delete')->withCategory($category);
  // }


  public function destroy($id)
  {
      //

      $category = Category::find($id);

      $category->delete();
      Session::flash('success', 'Udało ci się usunąć kategorię !');

      return redirect()->route('categories.index');
  }


}
