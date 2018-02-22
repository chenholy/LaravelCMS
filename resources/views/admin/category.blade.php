@extends('layouts.admin')
@section('content')
<script>
$('#categorybar').addClass('active');
@if($errors->has('name'))
alert($errors->get('name'));
@endif
</script>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <div class="row">
        <div class="col-md-5">
          <h1 class="page-header">ADD</h1>
          <form action="{{url('admin/category')}}" method="post" autocomplete="off">
            {{csrf_field()}}
            <div class="form-group">
              <label for="category-name">Name</label>
              <input type="text" id="category-name" name="name" class="form-control" placeholder="Enter categroy name..." required autocomplete="off">
              <span class="prompt-text">This is the category name displayed on site</span> </div>


            <div class="form-group">
              <label for="category-keywords">Keywords</label>
              <input type="text" id="category-keywords" name="keywords" class="form-control" placeholder="Enter categroy keywords" autocomplete="off">
              <span class="prompt-text">This will be displayed under keyword tag</span> </div>
            <div class="form-group">
              <label for="category-describe">Description</label>
              <textarea class="form-control" id="category-describe" name="describe" rows="4" autocomplete="off"></textarea>
              <span class="prompt-text">This will be displayed as short description</span> </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          </form>
        </div>
        <div class="col-md-7">
          <h1 class="page-header">Manage Category</h1>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th><span class=""></span> <span class="visible-lg">ID</span></th>
                  <th><span class=""></span> <span class="visible-lg">Name</span></th>
                  <th><span class=""></span> <span class="visible-lg">Count</span></th>
                  <th><span class=""></span> <span class="visible-lg">Action</span></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $key => $c)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$c->cate_name}}</td>
                  <td>{{sizeof($c->articles)}}</td>
                  <td><a href = "{{url('admin/deleteC/' . $c->cate_id)}}" class = "btn btn-danger btn-xs" onclick="return confirm('You are about to delete the category?')">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
