<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\Category;
use Illuminate\Support\Facades\Input;
use Validator;
class CategoryController extends BaseController
{
    //get admin/category
    public function index(){

      $categorys = Category::all();
      return view('admin.category')->with("data",$categorys);

    }

    public function create(){


    }

    //admin/category(Store use Post method)
    public function store(){

      $rules = [
        'name' => 'unique:categorys,cate_name'

      ];
      $valid = Validator::make(Input::all(),$rules);
      if($valid->passes()){
        $n =  new Category;

        $n->cate_name = Input::get('name') ;

        $n->cate_number = 0;
        $n->save();
        return redirect('admin/category');
      }else{
        return back()->withErrors($valid);

      }




    }

    //admin/category/{id}
    public function show($id){


    }
    //admin/category/{id}/edit
    public function edit($id){


    }
    //admin/article/{id}
    public function update($id){


        }
    //admin/category/{id}
    public function destroy($id){

    }
}
