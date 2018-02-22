@extends('layouts.admin')
@section('content')
<script>
$('#articlebar').addClass('active');
</script>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">

<h2>{{$data->article_name}}</h2>
<p>{{$data->article_content}}</p>
</div>
</div>
</section>

@endsection
