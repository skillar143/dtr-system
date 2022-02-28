<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function update(Request $request, $id)
    {
   
        $user = user::where('id','=',$id)->first();
       // $password = Hash::make($request->password_current);
        //dd($user->password);
        if(Hash::Check($request->password_current, $user->password)){
           // dd("dito");
            if($request->password == $request->password_confirmation){
                User::where('id','=',$id)->update([
                    'name' =>$request->name,
                    'email' =>$request->email,
                    'password' => Hash::make($request->password)
                    ]);
                    return redirect()->back()->with('success','Changed Successful'); 
            }

            return redirect()->back()->with('notmatch','Password and Confirm Password'); 
           
        
        }
        return redirect()->back()->with('wrong','Password is Invalid'); 

        
    }
}
