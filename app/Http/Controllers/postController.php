<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Tutorial;
use Illuminate\Support\Facades\Auth;

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
        try {

            $posts = DB::select("SELECT posts.id, 
                                    posts.titulo, 
                                    posts.descricao, 
                                    posts.url_image, 
                                    tipo_posts.tipo
                            FROM posts INNER JOIN tipo_posts
                            ON posts.tipo_posts_id = tipo_posts.id");

            $posts_carousel = DB::select("SELECT posts.id, 
                                            posts.titulo, 
                                            posts.descricao, 
                                            posts.url_image, 
                                            tipo_posts.tipo
                                    FROM posts INNER JOIN tipo_posts
                                    ON posts.tipo_posts_id = tipo_posts.id
                                    ORDER BY posts.created_at DESC LIMIT 3");

            $tutoriais = DB::select('SELECT * FROM tutorials LIMIT 3');
        } catch (\Throwable $th) {
            //throw $th;
            $posts = [];
            $posts_carousel = [];
            $tutoriais = [];
            return $this->indexMessage([$th->getMessage(), 'danger']);
        }

        return view("welcome")->with('posts', $posts)->with('posts_carousel', $posts_carousel)->with('tutoriais', $tutoriais);
    }

    public function indexMessage($message)
    {
        //
        //consulta utilizando o DB::SELECT
        try {
            //code...
            $posts = DB::select("SELECT posts.id, 
                                    posts.titulo, 
                                    posts.descricao, 
                                    posts.url_image, 
                                    tipo_posts.tipo
                            FROM posts INNER JOIN tipo_posts
                            ON posts.tipo_posts_id = tipo_posts.id");

            $posts_carousel = DB::select("SELECT posts.id, 
                                            posts.titulo, 
                                            posts.descricao, 
                                            posts.url_image, 
                                            tipo_posts.tipo
                                    FROM posts INNER JOIN tipo_posts
                                    ON posts.tipo_posts_id = tipo_posts.id
                                    ORDER BY posts.created_at ASC LIMIT 3");
        } catch (\Throwable $th) {
            //throw $th;
            return view('welcome')->with('posts', [])->with('posts_carousel', [])->with('message', $message);
        }
        return view("welcome")->with('posts', $posts)->with('posts_carousel', $posts_carousel)->with('message', $message);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check()) {

            $logged = Auth::user();
            $id_user = $logged->id;

            $tipoPosts = DB::select('SELECT tipo_posts.id, 
                                        tipo_posts.tipo 
                                FROM tipo_posts');
            return view("post/create")->with('tipoPosts', $tipoPosts);
        } else {
            return redirect()->route('login');
        }
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
        if (Auth::check()) {

            $logged = Auth::user();
            $id_user = $logged->id;
            $post = new Post();
            $post->titulo = $request->titulo;
            $post->titulo_2 = $request->titulo_2;
            $post->descricao = $request->descricao;
            $post->conteudo = $request->conteudo;
            $post->fonte_link = $request->fonte_link;
            $post->Tipo_Posts_id = $request->tipo;
            $post->url_image = $request->url_image;
            $post->url_image2 = $request->url_image2;
            $post->users_id = $id_user;
            $post->save();

            return redirect()->route('/');
        } else {
            return redirect()->route('login');
        }
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
        if (Auth::check()) {

            $logged = Auth::user();
            $id_user = $logged->id;
            $post = Post::find($id);
            $interacoes = DB::select('SELECT interacao_posts.id as id_interacao, comentario, interacao_posts.updated_at, 
                                         interacao_posts.created_at, users.name
                                FROM interacao_posts
                                INNER JOIN USERS
                                ON interacao_posts.users_id = users.id
                                WHERE posts_id = ?', [$id]);

            return view('Post/show')->with('post', $post)->with('interacoes', $interacoes);
        } else {
            return redirect()->route('login');
        }
    }

    public function index_my($id_user)
    {
        if (Auth::check()) {
            $logged = Auth::user();
            $id_user = $logged->id;
            $posts = DB::select("SELECT posts.id, 
                                    posts.titulo, 
                                    posts.descricao, 
                                    posts.url_image, 
                                    posts.created_at,
                                    posts.updated_at,
                                    tipo_posts.tipo
                            FROM posts INNER JOIN tipo_posts
                            ON posts.tipo_posts_id = tipo_posts.id WHERE Users_id = ?", [$id_user]);
            return view('Post/index_my')->with('posts', $posts);
        } else {
            return redirect()->route('login');
        }
    }

    public function show_my($id)
    {
        if (Auth::check()) {

            $logged = Auth::user();
            $id_user = $logged->id;
            $post = Post::where('id', $id)->where('Users_id', $id_user)->first();
            $interacoes = DB::select('SELECT interacao_posts.id as id_interacao, comentario, interacao_posts.updated_at, 
                                         interacao_posts.created_at, users.name
                                FROM interacao_posts
                                INNER JOIN USERS
                                ON interacao_posts.users_id = users.id
                                WHERE posts_id = ?', [$id]);

            return view('Post/show_my')->with('post', $post)->with('interacoes', $interacoes);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        if (Auth::check()) {
            $logged = Auth::user();
            $id_user = $logged->id;
            $post = Post::where('id', $id)->where('Users_id', $id_user)->first();
            if (isset($post)) {
                $tipoPosts = DB::select('SELECT tipo_posts.id, 
                                        tipo_posts.tipo 
                                FROM tipo_posts');
                return view('Post/edit')->with('post', $post)->with('tipoPosts', $tipoPosts);
            }else{
                return "Nenhum post encontrado";
            }
        } else {
            return redirect()->route('login');
        }
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

        if (Auth::check()) {
            $logged = Auth::user();
            $id_user = $logged->id;
            $post = Post::where('id', $id)->where('Users_id', $id_user)->first();
            if (isset($post)) {
                # code...
                $post->titulo = $request->titulo;
                $post->titulo_2 = $request->titulo_2;
                $post->descricao = $request->descricao;
                $post->conteudo = $request->conteudo;
                $post->fonte_link = $request->fonte_link;
                $post->Tipo_Posts_id = $request->tipo;
                $post->url_image = $request->url_image;
                $post->url_image2 = $request->url_image2;
                $post->update();
                return redirect()->route('post_my.index', $id_user);
            } else {
                return "Não encontrado";
            }
        } else {
            return redirect()->route('login');
        }
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

        if (Auth::check()) {
            $logged = Auth::user();
            $id_user = $logged->id;
            $post = Post::where('id', $id)->where('Users_id', $id_user)->first();
            if (isset($post)) {
                $post->delete();
                return redirect()->route('post_my.index', $id_user);
            } else echo "Produto não encontrado";
        } else {
            return redirect()->route('login');
        }
    }
}
