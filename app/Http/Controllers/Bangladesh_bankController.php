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

    public function approvebdbank(Request $request){
        try{
            $affectedRows = Fdr_model::where('id', $request->id)->update(['bdbank_verifyed' => $request->Approve, 'bdbank_comment' => $request->commend]);
            return redirect('/bank')->with('add_success', 'save successfully');   
        }
        catch (\PDOException $e) {
            return redirect('/bank')->with('add_success', 'save successfully');   
        }        
    }



}
