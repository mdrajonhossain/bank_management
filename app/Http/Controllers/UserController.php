<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;


class UserController extends Controller{
    //
    public function userpanal(){        
        return view('user.user');  
    }


    public function userfdr(){        
        return view('user.fdr');  
    }


    public function fdrformsend(Request $request){
        // dd($request->all());

        $post = new Fdr_model;
        
        $post->name = $request->name;
        $post->phone = $request->mobile_number;
        $post->email = $request->email;
        $post->etin = $request->etin;
        $post->nid = $request->nid_number;
        $post->nomonee_name = $request->nominee_name;
        $post->nomonee_phone = $request->nominee_number;
        $post->nomonee_relation = $request->relation;
        $post->nomonee_nid = $request->nominee_nid;
        $post->nomonee_etin = $request->nominee_etin;
        $post->post_code =  $request->code;
        $post->district = $request->district;
        $post->state = $request->state;
        $post->user_id = Auth::user()->id;
        $post->banch_id = "1";
        $post->branch_verifyed = "0";
        $post->bank_id = "0";
        $post->brank_verifyed = "0";
        $post->bdbank_verifyed = "0";
        $post->comment =  $request->comment;
        
        try{
            $post->save();    
            return redirect('/user/fdr')->with('quice_add_success', 'quice save successfully');
        }
        catch (\PDOException $e) {
            return redirect('/user/fdr')->with('quice_add_success', 'quice save successfully');
        }
    }


    public function get_fdrformsend(){        
        return view('user.fdr_manage');  
    }




}
