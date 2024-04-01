<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fdr_model;
use App\Models\Bankdatamodel;
use App\Models\Branchdatamodel;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller{


    public function userRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'usertype' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'usertype' => $request->usertype,
        ]);
    
        if ($user) {
            Auth::login($user);
            if ($user->usertype === '0') {
                Branchdatamodel::create([
                    'bank_id' => $request->bankid,
                    'branch_name' => $request->branch_name,
                ]);
                return redirect('/branch');
            } elseif ($user->usertype === '1') {
                Bankdatamodel::create([
                    'user_id' => $user->id,
                    'bank_name' => $request->bank_name,
                ]);
                return redirect('/bank');
            }
        } else {
            // Handle user creation failure
            // Log error or return error message
        }
    }


    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            if ($user->usertype === '0') {
                return redirect('/branch');
            } elseif ($user->usertype === '1') {
                return redirect('/bank');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }


    

    public function searchfdrstatus(Request $request){     
        $data = Fdr_model::where('search_id', 'LIKE', "%$request->aply_id%")->get();
        
        
        return view('userview', ['data' => $data]);   

    }
  
  
  
  
    public function fdrstatus(){        
        return view('fdrstatus');  
    }



    //
    public function userpanal(){        
        return view('user.user');  
    }


    public function userfdr(){        
        return view('fdr');  
    }


    public function fdrformsend(Request $request){

         

        $randomNumber = rand(10547, 971264700);

        $post = new Fdr_model;
        
        $post->name = $request->name;
        $post->search_id = $randomNumber;
        $post->phone = $request->mobile_number;
        $post->email = $request->email;
        $post->etin = $request->etin;
        $post->nid = $request->nid_number;
        $post->nomonee_name = $request->nominee_name;
        $post->nomonee_phone = $request->nominee_number;
        $post->nomonee_relation = $request->relation;
        $post->nomonee_nid = $request->nominee_nid;
        $post->nomonee_etin = $request->nominee_etin;
        $post->service_name = $request->service_name;
        $post->post_code =  $request->code;
        $post->district = $request->district;
        $post->state = $request->state;
        $post->aply_bank_id = $request->bankid;        
        $post->aply_branch_id = $request->branchid;
             
        try{
            $post->save();    
            // return redirect('/fdr')->with('quice_add_success', 'quice save successfully');
            return view('fdridgeneratorview', ["search_id" => $post->search_id, "Name" => $post->name]);
        }
        catch (\PDOException $e) {
            return redirect('/fdr')->with('quice_add_success', 'quice save successfully');
        }
    }


    public function get_fdrformsend(){        
        return view('user.fdr_manage');  
    }





    public function getbranch($id){  
        $branchlist = Branchdatamodel::where('bank_id', $id)->get();     
        return response()->json(['satus' => true, 'branch'=> $branchlist], 201); 
    }


    public function testapi(){        
        $users = Fdr_model::with(['bankdatamodel', 'branchdatamodel'])->get();
        


        return response()->json(['satus' => $users], 201);
    }





}