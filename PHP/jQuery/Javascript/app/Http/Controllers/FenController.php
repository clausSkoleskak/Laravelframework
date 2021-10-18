<?php

namespace App\Http\Controllers;
use Faker\Extension\NotInContainerException;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Fen;
use Illuminate\Support\Facades\DB;

class FenController extends Controller
{
    public function index(Request $request)
      { 
        if(!$request->input('fen')){
        $chess = Fen::all()->random(1)->first();
        return view('index', ['data' => $chess]);
       }else{
        $chess = Fen::inRandomOrder()->first();
        return view('index', ['data' => $chess]);

       }

    }

    public function rand (){

      return redirect()->route('fen',['fen'=>'FEN']);
    }
}
