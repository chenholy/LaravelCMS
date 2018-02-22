@extends('layouts.admin')
@section('content')
<script>
$('#articlebar').addClass('active');
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
  <div class="col-lg-2"></div>
  <div class="col-12 col-sm-12 col-lg-8">

    <h2>Add New Article</h2>
    <br><br>
    <form action="{{url('admin/article')}}" method="post" enctype="multipart/form-data">
        <input name='_token' type='hidden' value='{{csrf_token()}}'/>
        <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title" required >
        </div>

        <div class="form-group">
            <label>Category : </label>
            <select name="category">
              @foreach($cate as $c)
              <option value={{$c->cate_name}}>{{$c->cate_name}}</option>
              @endforeach

            </select>
        </div>

        <div class="form-group has-success">
          <label>Content : </label>
            <textarea  class="form-control" name="content" rows="12" > </textarea>
        </div>
        <button type="submit" class="btn btn-default" style="border: solid black 2px;">Submit</button>
    </form>
  </div>

    </div>
  </div>
</section>
@include('layouts.topbar')
@endsection
