<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Requests;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function subir_archivo(Request $request)
    {
        $request->validate([
            'Archivo' => 'required'
        ]);
        $file = $request->file('Archivo');
        $id = Auth::user()->id;
        $request->request->add(['user_id' => $id]);
        $ruta = $file->getClientOriginalName();    
        $request->request->add(['ruta' => $ruta]);   
        $solicitud = Requests::create($request->all());
        $solicitud->save();
        dd($file);
        
    }
}
