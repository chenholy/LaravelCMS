<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categorys';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;

    public function articles(){
      return $this->hasMany('App\Http\Model\Article','article_category','cate_name');
    }
}
