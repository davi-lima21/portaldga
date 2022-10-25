<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        if (isset($userInfo)){
            $blogs = DB::select("SELECT * FROM Blogs");
            return view('Blog/index')->with('blogs', $blogs);

        }else {
            return redirect()->route('userinfo.create');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        if (isset($userInfo)){
            return view('Blog/create');
        }else {
            return redirect()->route('userinfo.create');
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        if (isset($userInfo)){
            $logged = Auth::user();
            $id_user = $logged->id;
            $blog = new Blog();
            $blog->titulo = $request->titulo;
            $blog->descricao = $request->descricao;
            $blog->url_image = $request->url_image;
            $blog->users_id = $id_user;
            $blog->save();
    
            return redirect()->route('blog.index');

        }else {
            return redirect()->route('userinfo.create');
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        
        if (isset($userInfo)){

            $blog = Blog::find($id);

            if(isset($blog)){
                $userInfo = DB::select("SELECT user_infos.*, Users.name FROM user_infos 
                INNER JOIN Users where id = ?", [$blog->users_id]);

                return view('Blog/show')->with('blog', $blog)->with('userInfo', $userInfo[0]);

            }else{
                echo "Nenhum post encontrado";
            }

        }else {
            return redirect()->route('userinfo.create');
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        if (isset($userInfo)){
          

        }else {
            return redirect()->route('userinfo.create');
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        if (isset($userInfo)){
            

        }else {
            return redirect()->route('userinfo.create');
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
        $logged = Auth::user();
        $id_user = $logged->id;
        $userInfo = UserInfo::where('Users_id', $id_user)->first();
        if (isset($userInfo)){
          

        }else {
            return redirect()->route('userinfo.create');
        }
    }
}
