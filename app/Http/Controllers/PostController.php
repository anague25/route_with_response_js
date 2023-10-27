<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $posts = [
        1 => [
            "title" => "je suis tres beau",
            "content" => "toute les filles me cours apres"   
            ],
        2 => [
            "title" => "la programationn",
            "content" => "c'est le meilleur metier"
        ],
        3 => [
            "title" => "la programationn en python",
            "content" => "te rend tres tres tres riche"
            ]
        
        ];
    
        

    public function index()
    {
        return view('posts.index',['posts'=>$this->posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
       abort_if(!isset($this->posts[$id]),404);
       return view('posts.show',['post' => $this->posts[$id]]);
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
