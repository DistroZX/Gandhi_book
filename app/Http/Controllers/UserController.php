<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
      // for showing admin index
      public function admin_index(){
      
            return view('admin.login');
      }
            public function admin_logout(){

            return view('admin.logout');
      }
      // admin login
      public function anonymus_login(Request $request){

         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->withSuccess('You have successfully logged in!');
        }else {
            return redirect()->route('sign_up')->with('error',"User doesn't exist!");
        }

      }

      public function sign_in(){
         return view('user.sign_in');
      }
      public function sign_up(){
      
         return view('user.sign_up');
      }

      public function registration(){

         return view('user.index');
      }
      public function login(){

         return view('user.index');
      }
}
