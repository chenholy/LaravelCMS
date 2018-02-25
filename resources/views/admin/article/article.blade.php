@extends('layouts.admin')
@section('content')
<script>

$(document).ready(function(){ //will fail to register listener if click function is not in a parent function
$('#articlebar').addClass('active');
$('#checkbtn').click(function(){
  var checked = $('#articlelist').find(':checked').length;
  if(checked == 0){
    alert('nothing is selected');
  }else{
    if(confirm('Confirm Delete?')){
      $('#checkform').submit();
    }else{

    }

  }
});
// $('#submit-data').click(function(){
//     var search_value = $("#submit-value").val();
//
//     if(search_value != ""){ //ensure nothing happen when there is no search input
//       $.get("{{url('admin/Search')}}",{'input':search_value},function(data){
//
//
//         var result = "";
//         $.each(data,function(i,item){
//           result = result +  '<tr><td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>'
//                           +  '<td>'+ (i+1) + '</td>'
//                           +  '<td class="article-title">'+ item.article_name + '</td>'
//                           +  '<td>' + item.article_category + '</td>'
//                           +  '<td class="hidden-sm">Dummy#</td>'
//                           +  '<td class="hidden-sm">Dummy#</td>'
//                           +  '<td>' + item.article_time + '</td>'
//                           +  '<td>'
//                           +  '<a href="http://localhost/lavablog/public/admin/article/' + item.article_id +'">View</a> '
//                           +  '<a href="http://localhost/lavablog/public/admin/article/' + item.article_id +'/edit">Update</a> '
//                           +  '<a href ="http://localhost/lavablog/public/admin/deleteA/'+ item.article_id+'" onclick="return confirm(\'You are about to delete the article?\')">Delete</a>'
//                           +  '</td></tr>';
//
//                         });
//             $('#submit-value').val("");
//             $('#articlelist').html(result);
//           });
//     }
//
//       });
    });
</script>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">

    <form action="{{url('admin/article')}}" class="navbar-form navbar-right" role="search">
      <!-- {{csrf_field()}} -->
      <div class="input-group">
        <input id="submit-value" type="text" class="form-control" autocomplete="off" placeholder="Search article" name="input">
        <span class="input-group-btn">
        <button id="" class="btn btn-default" type="submit">Search</button>
        </span> </div>
    </form>
      <form id="checkform" action="{{url('admin/checkbox')}}" method = "post" >
          {{csrf_field()}}
        <h1 class="page-header">General</h1>

        <ol class="breadcrumb">
          <li><a href="{{url('admin/article/create')}}" class="btn btn-default" style = "border:solid 2px black">Add Article</a></li>
        </ol>
        <h1 class="page-header">Manage Article <span class="badge">{{Session::get('count')}}</span></h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <!--article headers-->
            <thead>
              <tr>
                <th><span class=""></span> <span class="visible-lg"></span></th>
                <th><span class=""></span> <span class="visible-lg">#</span></th>
                <th><span class=""></span> <span class="visible-lg">Title</span></th>
                <th><span class=""></span> <span class="visible-lg">Category</span></th>
                <th class="hidden-sm"><span class=""></span> <span class="visible-lg">Tag</span></th>
                <th class="hidden-sm"><span class=""></span> <span class="visible-lg">Comments</span></th>
                <th><span class=""></span> <span class="visible-lg">Date</span></th>
                <th><span class=""></span> <span class="visible-lg">Action</span></th>
              </tr>
            </thead>
            <tbody id="articlelist">
              @foreach($data as $key => $y)

              <tr>
                <td><input type="checkbox" class="input-control" name="checkbox[]" value={{$y->article_id}} /></td>
                <td>{{$key+1}}</td>
                <td class="article-title">{{$y->article_name}}</td>
                <td>{{$y->article_category}}</td>
                <td class="hidden-sm">Dummy#</td>
                <td class="hidden-sm">Dummy#</td>
                <td>{{$y->article_time}}</td>
                <td><a href="{{url('admin/article/' . $y->article_id)}}" class = "btn btn-info btn-xs">View</a>  <a href="{{url('admin/article/' . $y->article_id . '/edit')}}" class = "btn btn-success btn-xs">Update</a>
                  <a href = "{{url('admin/deleteA/' . $y->article_id)}}" class = "btn btn-danger btn-xs" onclick="return confirm('You are about to delete the article?')">Delete</a></td>
              </tr>
              @endforeach
              <!--will need to create hidden form if use delete in resource controller-->


            </tbody>
          </table>
        </div>
        <footer class="message_footer">
          <nav>
            <div class="btn-toolbar operation" role="toolbar">
              <div class="btn-group" role="group"> <a class="btn btn-default" onClick="select()">All</a> <a class="btn btn-default" onClick="reverse()">Reverse</a> <a class="btn btn-default" onClick="noselect()">None</a> </div>
              <div class="btn-group" role="group">
                <button id="checkbtn" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete all selected" name="checkbox_delete">Delete</button>
              </div>
            </div>

            <div class = "text-right" id="pagibar"> {{$data->links()}}</div>
          </nav>
        </footer>
      </form>
    </div>
  </div>
</section>

@endsection
