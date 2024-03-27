<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;

class BranchController extends Controller{
    //
    public function branchpanal(){        
        $data = Fdr_model::all();
        return view('branch.branch', ['data' => $data]);
    }

    public function approvebranch(Request $request){
        try{
            $affectedRows = Fdr_model::where('id', $request->id)->update(['banch_id' => auth()->user()->id, 'branch_verifyed' => $request->Approve, 'branch_comment' => $request->commend]);
            return redirect('/branch')->with('add_success', 'save successfully');   
        }
        catch (\PDOException $e) {
            return redirect('/branch')->with('add_success', 'save successfully');   
        }        
    }

    public function viewdata($id){        
        $data = Fdr_model::find($id);
        return view('branch.view', ['data' => $data]);
    }


    
}
