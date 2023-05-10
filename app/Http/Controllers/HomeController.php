<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puesto;
use App\Models\Aplicacion;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    //
    public function index(){
        return view('postcreate');
    }

    public function newPost(Request $request){
        $post = Puesto::create([
            'descripcion' => $request->input('descripcion'),
            'empresa' => $request->input('empresa'),
            'salario' => $request->input('salario'),
            'fecha_ini' => $request->input('fecha_ini'),
            'fecha_fin' => $request->input('fecha_fin'),
            'activo' => 1
        ]);

        return redirect()->route('posts');
    }

    public function showPosts(){
        $posts = Puesto::orderBy('created_at', 'DESC')->get();
        return view('applications', ['posts'=>$posts]);
    }

    public function application($id){
        $db = Puesto::where('id', $id)->first();
        $db->activo = 0;
        $db->refresh();
    }

    public function testID($id){

        return view('apply', ['id'=> $id]);
    }

    public function addApp(Request $request){
        $app = Aplicacion::create([
            'nombre' => $request->input('nombre'),
            'phone' => $request->input('phone'),
            'mail' => $request->input('mail'),
            'idp' => $request->input('ipd')
        ]);
        return redirect()->route('posts');
    }

    public function seeApp(){
        $applicants = DB::table('aplicacions')
            ->join('puestos', 'puestos.id', '=', 'aplicacions.idp')
            ->select('puestos.*', 'aplicacions.*')->orderByDesc('aplicacions.idp')
            ->get();
        return view('viewapps', ['applicants'=>$applicants]);
    }
}
