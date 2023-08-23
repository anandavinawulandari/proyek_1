<?php

namespace App\Http\Controllers;
use App\Models\Notadinas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
class NotaDinasController extends Controller
{

    public function index(){
        $data = Notadinas::all();
        return view('notadinas.index', ['dataNotadinas' => $data]);

        
    }
    public function pdfNotadinas(){
        $data = Notadinas::all();
        return view('notadinas.pdfNotadinas', ['dataNotadinas' => $data]);
    }
}
