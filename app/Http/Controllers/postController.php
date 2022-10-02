<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = DB::select("SELECT posts.id, 
                                    posts.titulo, 
                                    posts.descricao, 
                                    posts.url_image, 
                                    tipo_posts.tipo
                            FROM posts INNER JOIN tipo_posts
                            ON posts.tipo_posts_id = tipo_posts.id
                            LIMIT 5");

        $posts_carousel = DB::select("SELECT posts.id, 
                                            posts.titulo, 
                                            posts.descricao, 
                                            posts.url_image, 
                                            tipo_posts.tipo
                                    FROM posts INNER JOIN tipo_posts
                                    ON posts.tipo_posts_id = tipo_posts.id
                                    ORDER BY posts.created_at DESC LIMIT 3");

       return view("welcome")->with('posts', $posts)->with('posts_carousel', $posts_carousel);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipoPosts = DB::select('SELECT tipo_posts.id, 
                                        tipo_posts.tipo 
                                FROM tipo_posts');
        return view("post/create")->with('tipoPosts', $tipoPosts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post();
        $post->titulo = $request->titulo;
        $post->descricao = $request->descricao;
        $post->Tipo_Posts_id = $request->tipo;
        $post->url_image = $request->url_image;
        $post->users_id = $request->user_id;
        $post->save();

        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('Post/show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
