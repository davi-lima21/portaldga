<?php

namespace App\Http\Controllers;
use App\Models\Tutorial;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TutorialUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {

        try {
            //code...
            $tutoriais = DB::select('SELECT * FROM tutorials');
            return view('Tutorial/index')->with('tutoriais', $tutoriais);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }

        

    }

    public function show($id)
    {
        //
        try {
            $tutorial = Tutorial::find($id);

            if(isset($tutorial)){
                return view('Tutorial/show')->with('tutorial', $tutorial);
            }else{
                echo "tutorial não encontrado";
            }
        } catch (\Throwable $th) {
            echo $th;
        }

       
    }

}
