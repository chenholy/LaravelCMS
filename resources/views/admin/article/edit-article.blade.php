@extends('layouts.admin')
@section('content')
<script>
$('#articlebar').addClass('active');
$('#articleref').attr("href","");
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <div class="col-lg-2"></div>
  <div class="col-12 col-sm-12 col-lg-8">

    <h2>Edit Article</h2>
    <br><br>
    <form action="{{url('admin/article/' . $data[0]->article_id)}}" method="post">
        {{ method_field('PUT') }}
        {{csrf_field()}}

        <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title" value = "{{$data[0]->article_name}}" required >
        </div>

        <div class="form-group">
            <label>Category : </label>
            <select name="category">
              @foreach($data[1] as $c)
              @if($c->cate_name == $data[0]->article_category)
              <option value={{$c->cate_name}} selected>{{$c->cate_name}}</option>
              @else
              <option value={{$c->cate_name}}>{{$c->cate_name}}</option>
              @endif
              @endforeach

            </select>
        </div>

        <div class="form-group has-success">
          <label>Content : </label>
            <textarea  class="form-control" name="content" rows="12" >{{$data[0]->article_content}} </textarea>
        </div>
        <button type="submit" class="btn btn-default" style="border: solid black 2px;">Submit</button>
        <a class="btn btn-danger" href="{{asset('admin/return')}}"" style="border: solid black 2px">Cancel</a>

    </form>
  </div>

    </div>
  </div>
</section>

@endsection
