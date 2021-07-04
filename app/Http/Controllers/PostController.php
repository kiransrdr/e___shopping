<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      return view('signup', ['signup' => $posts]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $request->validate([
        'name'       => 'required|max:255',
        'email' => 'required',
        'password' => 'required',
      ]);

      $post = Post::updateOrCreate(['id' => $request->id], [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
              ]);

      return response()->json(['code'=>200, 'message'=>'Post Created successfully','data' => $post], 200);

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  
  }
