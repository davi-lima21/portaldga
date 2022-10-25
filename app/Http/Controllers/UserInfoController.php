<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showMessage($message, $id)
    {
        //
        try {
            //code...
            $userInfo = UserInfo::where('Users_id', $id)->first();

            if (isset($userInfo)) {
                # code...
                return view('UserInfo/show')->with('userInfo', $userInfo);
            } else {
                return view('UserInfo/create');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return view('UserInfo/show')->with('userInfo', [])->with('userInfo', $userInfo);
        }
        return view("UserInfo/show")->with('userinfo', $userInfo)->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('UserInfo/create');
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = new UserInfo();
        $userInfo->users_id = $id_user;
        $userInfo->rede_social = $request->rede_social;
        $userInfo->img_perfil = $request->img_perfil;
        $userInfo->img_capa = $request->img_capa;
        $userInfo->telefone = $request->telefone;
        $userInfo->save();

        return redirect()->route('userinfo.show', $id_user);
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

        try {
            //code...
            $userInfo = UserInfo::where('Users_id', $id)->first();



            if (isset($userInfo)) {

                # code...
                $name_user = DB::select("SELECT Users.name FROM Users where id = ?", [$id]);
                $total_posts = DB::select("SELECT count(posts.id) as total FROM posts WHERE Users_id = ?", [$id]);
                $total_blogs = DB::select("SELECT count(blogs.id) as total FROM blogs WHERE Users_id = ?", [$id]);
                $total_interacoes_posts = DB::select("SELECT count(interacao_posts.id) as total FROM interacao_posts WHERE Users_id = ?", [$id]);
                $total_interacoes_blogs = DB::select("SELECT count(interacao_blogs.id) as total FROM interacao_blogs WHERE Users_id = ?", [$id]);

                $total_interacoes = $total_interacoes_posts[0]->total + $total_interacoes_blogs[0]->total;
                return view('UserInfo/show')->with('userInfo', $userInfo)->with('total_posts', $total_posts)->with('total_blogs', $total_blogs)
                                            ->with('total_interacoes', $total_interacoes)->with('name_user', $name_user[0]);
            } else {
                return view('UserInfo/create');
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
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
        //
        try {
            //code...

            $userInfo = UserInfo::where('Users_id', $id)->first();

            if (isset($userInfo)) {
                # code...
                return view('UserInfo/edit')->with('userInfo', $userInfo);
            } else {
                return view('UserInfo/create');
            }
        } catch (\Throwable $th) {
            //throw $th;

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
        try {
            //code...
            $userInfo = UserInfo::where('Users_id', $id)->first();

            if (isset($userInfo)) {
                # code...
                $logged = Auth::user();
                $id_user = $logged->id;
                $userInfo->users_id = $id_user;
                $userInfo->profileImg = $request->profileImg;
                $userInfo->status = "A";
                $userInfo->dataNasc = $request->dataNasc;
                $userInfo->genero = $request->genero;
                $userInfo->update();
                return redirect()->route('userinfo.show', $id_user);
            } else {
                return view('UserInfo/create');
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
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
        try {
            //code..
            $userInfo = UserInfo::where('Users_id', $id)->first();
            //dd($userInfo);
            if (isset($userInfo)) {
                $userInfo->delete();
                return redirect()->route('userinfo.create');
            }
            echo "sasd";
            //return $this->showMessage(['Dados limpos com sucesso!', 'info'], 1);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
            //return $this->showMessage([$th->getMessage(), 'danger'], 1);
        }
    }
}
