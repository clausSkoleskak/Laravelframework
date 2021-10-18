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
        $users = Fen::all()->random(1)->first();
        //$users = Fen::inRandomOrder()->first();

        return view('index', ['data' => $users]);


    }

    public function rand (){

      return redirect()->route('fen',['fen'=>'FEN']);
    }
}
