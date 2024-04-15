<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;
use App\Models\Bankdatamodel;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class Bangladesh_bankController extends Controller
{
    //
    public function Bangladesh_bankpanal(){        
        

        $data = DB::select("
        SELECT fdr_models.*, fdr_models.id as fd_id, bankdatamodels.*, branchdatamodels.*, users.id as update_id, users.name as auth_name, users.email as authemail, users.is_active as auth_status
        FROM fdr_models
        LEFT JOIN bankdatamodels ON fdr_models.aply_bank_id = bankdatamodels.id
        LEFT JOIN branchdatamodels ON fdr_models.aply_branch_id = branchdatamodels.id
        LEFT JOIN users ON bankdatamodels.user_id = users.id");
       

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


    public function fdrviewdata($id){          
        $data = Fdr_model::find($id);
        return view('bangladeshbank.viewpage', ['data' => $data]);
    }


    public function bnklist(){        
        // $data = Bankdatamodel::all();
        $data = DB::table('users')
        ->select('bankdatamodels.id as bank_id', 'bankdatamodels.bank_name', 'users.id as userId', 'users.name', 'users.email', 'users.usertype', 'users.is_active',)
        ->leftJoin('bankdatamodels', 'bankdatamodels.user_id', '=', 'users.id')
        ->where('users.usertype', '=', 1)
        ->get();

         

        
        
        return view('bangladeshbank.banklist', ['data' => $data]);
    }



    public function bdbank(){
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


    // bank account enable /disable   
    public function bank_statusdata($id, $is_active){                 
        try{
            $affectedRows = User::where('id', $id)->update(['is_active' => $is_active]);
            // return redirect('/bank')->with('add_success', 'save successfully');   
            return redirect()->back();
        }
        catch (\PDOException $e) {
            // return redirect('/bank')->with('add_success', 'save successfully');   
            return redirect()->back();
        }        
    }



}