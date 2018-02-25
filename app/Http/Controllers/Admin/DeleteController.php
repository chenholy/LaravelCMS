<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\Article;
use App\Http\Model\Category;
use Session;
class DeleteController extends BaseController{
  public function deleteA($id){
    $article = Article::find($id);
    $article->delete();

    return redirect('admin/article');

  }

  public function deleteC($id){
    $cate = Category::find($id);
    $cate->delete();

    return redirect('admin/category');
  }
  public function checkbox(){
    $lists = Input::all()["checkbox"];
    foreach ($lists as $index){
      Article::find($index)->delete();

    }
    return back();

  }
  public function cancel(){
    return redirect('admin/article');
  }

}
