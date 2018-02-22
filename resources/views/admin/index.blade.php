@extends('layouts.admin')
@section('content')
<script>
$('#indexbar').addClass('active');
</script>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <h1 class="page-header">GENERAL INFO</h1>

      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>Article</h4>
          <span class="text-muted">#</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>Category</h4>
          <span class="text-muted">#</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>Links</h4>
          <span class="text-muted"># </span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>Views</h4>
          <span class="text-muted">#</span> </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <!--how to echo session variable on blade html-->
              <td>User: <span>{{Session::get('user')['name']}}</span></td>
            </tr>
            <!-- <tr>
              <td>Last Login: 2016-01-08 15:50:28 , Login IP: ::1:55570</td>
            </tr> -->
          </tbody>
        </table>
      </div>
      <h1 class="page-header">System Info</h1>

      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr> </tr>
          </thead>
          <tbody>
            <tr>
              <td>Broswer:</td>
              <td>Chrome47</td>
              <td>Sever Software:</td>
              <td>{{$_SERVER['SERVER_SOFTWARE']}}</td> <!--$_SERVER return an array with many environment information-->
            </tr>

            <tr>
              <td>Operating System:</td>
              <td>{{PHP_OS}}</td>
              <td>PHP:</td>
              <td>CGI-FCGI</td>
            </tr>
            <tr>
              <td>USER IP:</td>
              <td>{{$_SERVER['SERVER_ADDR']}}</td>
              <td>MYSQL VERSION:</td>
              <td>{{$db_ver}}</td>
            </tr>
            <tr>
              <td>PATCH:</td>
              <td class="version">PeiChen CMS 1.0 </td>
              <td>UPLAD FILE:</td>
              <td>OK <font size="-6" color="#BBB">(file-max：2M ，form-max：8M )</font></td>
            </tr>
            <tr>
              <td>CHARTSET:</td>
              <td>UTF-8</td>
              <td>TIME:</td>
              <td><?php echo date('Y-m-d H:i:s') ?></td>
            </tr>
          </tbody>
          <tfoot>
            <tr></tr>
          </tfoot>
        </table>
      </div>
      <footer>
        <h1 class="page-header">APP INFO</h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <td> POWERED BY PeiChen ALL RIGHTS RESERVED</td>
            </tr>
          </tbody>
        </table>
        </div>
      </footer>
    </div>
  </div>
</section>


@endsection
