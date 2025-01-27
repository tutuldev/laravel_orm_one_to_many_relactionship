<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    $users=User::get();
    //    $users=User::with('post')->get();
    //    $users=User::with('post')->find(2);


    // method 2
    //    $users=User::find(2);
    //    $posts=$users->post;

        // who yet not create a post
    //    $users=User::doesntHave('post')->get();

        // who create post
    //    $users=User::has('post')->get();
    //    $users=User::has('post')->with('post')->get();

        // make condiction
        // $users=User::has('post','>=',2)
        //         ->with('post')
        //         ->get();


        // withcount
        // $users = User::withCount('post')
        //         ->get();

        // select
        $users = User::select(['name','email'])
                ->withCount('post')
                ->get();

       return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create data method 1
        // $post = new Post([
        //     'title' => 'News title - test',
        //     'description' => 'Just Testing...'
        // ]);

        // $user = User::find(2); // Find the user with ID 2
        // if ($user) {
        //     $user->post()->save($post); // Save the post for the user
        //     return response()->json(['success' => 'Post created successfully'], 201);
        // } else {
        //     return response()->json(['error' => 'User not found'], 404);
        // }


        // create data method 2
        // $user = User::find(2);
        // $user->post()->create([
        //     'title' => 'New Title _ Test',
        //      'description' => 'Just Testing 2...'
        // ]);

        // multipe data insert in same time
        $user = User::find(2);
        $user->post()->createMany([
            [
             'title' => 'New Title _ Test',
             'description' => 'Just Testing 3...'
            ],
            [
             'title' => 'New Title _ Test',
             'description' => 'Just Testing 4...'
            ]
        ]);
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
