<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use App\Http\Model\BlogUser;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function login(){


    if($input=Input::all())  {
      $user =  BlogUser::all();
      $a = true;

      foreach ($user as $user) {
        if($user->name == $input['username'] && Crypt::decrypt($user->password) == $input['userpwd']){

              session(['user'=>$user]);

              return redirect('admin/index');

            }

      }
      if($a){
         return back()->with('msg','wrong username or password');
       }

    }else{
      return view('admin.login');
    }
    }


//
//     public function crypt()
//     {
//       $str='kuangcao2230';
//       $crypted = Crypt::encrypt($str);
//
//       echo $crypted ;
//       echo '<br>';
//       echo Crypt::decrypt($crypted); //decryption will remain same as input
//     }
 }
