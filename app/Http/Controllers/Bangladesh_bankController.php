<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;



class Bangladesh_bankController extends Controller
{
    //
    public function Bangladesh_bankpanal(){        
        $data = Fdr_model::all();
        return view('bangladeshbank.bangladeshbank', ['data' => $data]);        
    }
}
