<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller{


    public function userregister(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }





    //
    public function userpanal(){        
        return view('user.user');  
    }


    public function userfdr(){        
        return view('fdr');  
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
        $post->banch_id = "1";        
        $post->bank_id = "0";        ;
                
        try{
            $post->save();    
            return redirect('/fdr')->with('quice_add_success', 'quice save successfully');
        }
        catch (\PDOException $e) {
            return redirect('/fdr')->with('quice_add_success', 'quice save successfully');
        }
    }


    public function get_fdrformsend(){        
        return view('user.fdr_manage');  
    }




}
