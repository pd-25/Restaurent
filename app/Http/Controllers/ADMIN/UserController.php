<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function user(){
      // $data['users'] = User::select('name', 'email')->where('usertype', 0)->get();
        $data['users'] = User::get()->where('usertype', 0);
        return view('ADMIN.user', $data);
    }

    public function a(){
        return view('ADMIN.aaa');
    }

    public function delete_user(Request $request)
    {
        if( User::where('id',$request->delete_user)->delete()){
            $request->session()->flash('message', 'your data has been deleted');
        }else{
            $request->session()->flash('message', 'your data has not been deleted');
        }
        
        return redirect('/user');
    }
}
