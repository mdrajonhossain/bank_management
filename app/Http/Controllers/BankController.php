<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class BankController extends Controller{


    // 
    public function dashboardpanal(){ 
        return view('bank.bankdash');
    }

    public function bank_branch(){ 
       

        $auth_user_id = Auth::id();

        $data = DB::table('branchdatamodels')
            ->select('branchdatamodels.*', 'bankdatamodels.*', 'users.id as userId','users.name as username', 'users.email as user_email', 'users.is_active')   
            ->leftJoin('bankdatamodels', 'branchdatamodels.bank_id', '=', 'bankdatamodels.id')
            ->leftJoin('users', 'branchdatamodels.user_id', '=', 'users.id')
            ->where('branchdatamodels.bank_id', $auth_user_id)
            ->get();
        

        return view('bank.bankbranch', ['data' => $data]);        
    }

    

    //
    public function bankpanal(){        
        // $data = Fdr_model::all();

        // $user_id = Auth::id();
        // $data = Fdr_model::with(['bankdatamodel', 'branchdatamodel'])
        //     ->whereHas('bankdatamodel', function ($query) use ($user_id) {
        //         $query->where('user_id', $user_id);
        //     })->get();

        $auth_user_id = Auth::id();;

        $data = DB::select("
            SELECT fdr_models.*, fdr_models.id as fd_id, bankdatamodels.*, branchdatamodels.*, 'users.name as auth_name', users.email as authemail, users.name as auth_name, users.is_active as auth_status 
            FROM fdr_models
            LEFT JOIN bankdatamodels ON fdr_models.aply_bank_id = bankdatamodels.id
            LEFT JOIN branchdatamodels ON fdr_models.aply_branch_id = branchdatamodels.id
            LEFT JOIN users ON branchdatamodels.user_id = users.id 
            WHERE bankdatamodels.user_id = $auth_user_id
        ");




        return view('bank.bank', ['data' => $data]);
    }



    public function approvebank(Request $request){
        try{
            $affectedRows = Fdr_model::where('id', $request->id)->update(['bank_id' => auth()->user()->id, 'brank_verifyed' => $request->Approve, 'bank_comment' => $request->commend]);
            return redirect()->back();
        }
        catch (\PDOException $e) {
            return redirect()->back();
        }        
    }

    public function viewdata($id){        
        $data = Fdr_model::find($id);
        return view('bank.view', ['data' => $data]);
    }

// branch account enable /disable   
    public function statusdata($id, $status){
        try{
            $affectedRows = User::where('id', $id)->update(['is_active' => $status]);
            // return redirect('/bank')->with('add_success', 'save successfully');   
            return redirect()->back();
        }
        catch (\PDOException $e) {
            // return redirect('/bank')->with('add_success', 'save successfully');   
            return redirect()->back();
        }        
    }


    





}