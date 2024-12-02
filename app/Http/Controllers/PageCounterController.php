<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{

    public function index()
    {
        $pagecounter = DB::table('pagecounter')->get();

        DB::table('pagecounter')->increment('Jumlah');

    	return view('indexpagecounter',['pagecounter' => $pagecounter]);

    }


}