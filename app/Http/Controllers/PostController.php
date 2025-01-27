<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    $posts = Post::with('user')->get();
    //    $posts = Post::with('user')->find(12 );
    //    return $posts;
    // echo $posts->title. "<br>";
    // echo $posts->description. "<br>";
    // echo $posts->user->name. "<br>";

    // echo all data by foreach
    //    $posts = Post::with('user')->get();
    //     foreach($posts as $post){
    //         echo "<div style='border:1px solid red;margin:0 0 10px'>
    //         <h3>$post->title</h3>
    //         <span>{$post->user->name}</span>
    //         <p>$post->description</p>
    //         </div>";
    //     }

    // $posts = Post::with('user')
    //         ->with('title','news title two')
    //         ->get();
    //         return $posts;

            // $posts = Post::with('user')
            // ->withWhereHas('user',function($query){
            //     $query->where('name','salman');
            // })->get();
            // return $posts;

            // $posts = Post::with('user')
            // ->withWhereHas('user',function($query){
            //     $query->where('name','salman')
            //     ->orWhere('name','rakin');
            // })->get();
            // return $posts;

            // usign belongsto
            $users = User::where('name',"John Doe")->get();
            $posts = Post::whereBelongsTo($users)->get();
            return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
