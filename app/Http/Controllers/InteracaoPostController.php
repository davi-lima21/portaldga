<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\InteracaoPost;
use App\Models\Post;

class InteracaoPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $interacao = new InteracaoPost();
    
            $interacao->comentario =  $request->comentario;
            $interacao->Posts_id =  $request->post_id;
            $interacao->users_id = 1;
           
            $interacao->save();

            return $this->show($request->post_id);
        
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
         //
         $post = Post::find($id);
         $interacoes = DB::select('SELECT interacao_posts.id as id_interacao, comentario, interacao_posts.updated_at, 
                                          interacao_posts.created_at, users.nome
                                 FROM interacao_posts
                                 INNER JOIN USERS
                                 ON interacao_posts.users_id = users.id
                                 WHERE posts_id = ?', [$id]);
 
         return view('Post/show')->with('post', $post)->with('interacoes', $interacoes);
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
