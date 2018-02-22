<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Support\Facades\Input;
class ArticleController extends BaseController
{
    //admin/article
    public function index(){
      $articles = Article::orderBy('article_time','desc')->paginate(10);
      if (Input::has('input')){
        if(Input::get('input')==null){
          return view('admin.article.article')->with('data',$articles);

        }else{
          $search = Input::get('input');
          $results = Article::where('article_name', 'LIKE', '%'.$search.'%')->paginate(10);
          $results->withPath(url()->full());
          return view('admin.article.article')->with('data',$results);
        }

      }else{
        $num = Article::all()->count();
        session(["count"=> $num]);
        return view('admin.article.article')->with('data',$articles);

      }


    }
    //admin/article/create
    public function create(){
      $cates = Category::all();
      return view('admin.article.add-article')->with('cate',$cates);

    }

    //admin/article (Store use Post method)
    public function store(){
       // dd(Input::all());
      $n =  new Article;

      $n->article_name = Input::get('title');
      $n->article_category = Input::get('category');
      $n->article_content = Input::get('content');
      $n->article_view = 0;
      $n->save();
      return redirect('admin/article');


    }

    //admin/article/{id}
    public function show($id){
      $article = Article::find($id);
      return view('admin.article.showarticle')->with('data',$article);

    }
    //admin/article/{id}/edit
    public function edit($id){
      $article = Article::find($id);
      $cates = Category::all();
      $data = array($article,$cates);

      return view('admin.article.edit-article')->with('data',$data);

    }
    //admin/article/{id}
    public function update($id){
      if(Input::all()){
        $u = Article::find($id);
        $u->article_name = Input::get('title');
        $u->article_category = Input::get('category');
        $u->article_content = Input::get('content');
        $u->save();
        return redirect('admin/article');

      }else{
        return redirect('admin/article');
      }

        }
    //admin/article/{id}
    public function destroy($id){

    }
}
