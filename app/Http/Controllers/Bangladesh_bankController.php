<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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


    public function viewdata($id){        
        $data = Fdr_model::find($id);
        return view('bangladeshbank.view', ['data' => $data]);
    }


    public function bdbank()
    {
        $pass = "rajon123456";
        $user = User::create([
            'name' => "bdbank",
            'email' => "bdbank@gmail.com",
            'password' => bcrypt($pass),
            'usertype' => 2,
        ]);
    
        // Check if the user type is 2
        if ($user->usertype === 2) {
            return redirect('/bangladeshBank');
        } else {
            return redirect('/');
        }
    }



}