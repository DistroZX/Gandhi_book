<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{

	public function anonymus_dashboard(){

		return view('admin.index');
	}
	public function index(){

	    return view('user.index');
	}
	public function booklist(){

		return view('user.list');
	}
	public function category(){

		return view('user.category');
	}
	public function author(){

		return view('user.authors');
	}
	public function blog(){

		return view('user.blog');

	}
	public function admin_logout(){

		return view('admin.login');

	}
	public function showUser()
    {
        $users =User::get();
        return view('admin.userDetails.userList',['users' => $users]);
    }
    public function AddUserForm()
    {
        return view('admin.userDetails.addUser');
    }






}
