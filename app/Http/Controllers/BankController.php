<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;




class BankController extends Controller{
    //
    public function bankpanal(){        
        $data = Fdr_model::all();
        return view('bank.bank', ['data' => $data]);
    }



    public function approvebank(Request $request){
        try{
            $affectedRows = Fdr_model::where('id', $request->id)->update(['bank_id' => auth()->user()->id, 'brank_verifyed' => $request->Approve, 'bank_comment' => $request->commend]);
            return redirect('/branch')->with('add_success', 'save successfully');   
        }
        catch (\PDOException $e) {
            return redirect('/branch')->with('add_success', 'save successfully');   
        }        
    }






}
