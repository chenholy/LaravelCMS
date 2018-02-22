<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\BlogUser;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;
class IndexController extends BaseController
{
    public function index(){
      // $data = session()->all()['user']['name'];
      // dd($data);
      $db_ver = DB::select( DB::raw("select version()") )[0]->{"version()"};


      return view('admin.index')->with('db_ver',$db_ver);
    }
    public function quit(){
      session(['user'=> null]);
      return redirect('admin/login');
    }

    public function pass(){

      if($input = Input::all()){

        $rules = [
          'password' => 'required|between:6,20|confirmed',
          'old_password'=>'required',
        ];


        $valid = Validator::make($input,$rules);
        //dd(session()->get('user')['ID']);


        if ($valid->passes()){

          $user = BlogUser::find(session()->get('user')['ID']);

          $_password = Crypt::decrypt($user->password);
          if($input['old_password']==$_password){

            $user->password = Crypt::encrypt($input['password']);
            $user->update();
            return back()->with('errors','password reset successful');
          }else{
            return back()->with('errors','wrong passwrod');
          }

        }else {
          //dd($valid->errors()->all()); use for print out validation error message
          // return back()->withErrors($valid);
          return back()->withErrors($valid);
        }

      }
    }
}
