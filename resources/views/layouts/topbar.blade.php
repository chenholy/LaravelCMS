<!--个人信息模态框-->
<div class="modal fade" id="seeUserInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="{{url('admin/pass')}}" method="post" id="reset-form">
      {{csrf_field()}}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" >Password Reset</h4>
        </div>

        <div class="modal-body">
          <table class="table" style="margin-bottom:0px;">
            <thead>
              <tr> </tr>
            </thead>
            <tbody>

              <!-- <tr>
                <td wdith="20%">用户名:</td>
                <td width="80%"><input type="text" value="" class="form-control" name="username" maxlength="10" autocomplete="off" /></td>
              </tr> -->

              <tr>
                <td wdith="20%">old password:</td>
                <td width="80%"><input type="password" class="form-control" name="old_password" maxlength="18" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">new password:</td>
                <td width="80%"><input type="password" class="form-control" name="password" maxlength="18" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">confirm passwrod:</td>
                <td width="80%"><input type="password" class="form-control" name="password_confirmation" maxlength="18" autocomplete="off" /></td>
              </tr>
            </tbody>
            <tfoot>
              <tr></tr>
            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" ">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
        <!--个人登录记录模态框-->
        <!--<div class="modal fade" id="seeUserLoginlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >LOGIN LOG</h4>
              </div>
              <div class="modal-body">
                  <table class="table" style="margin-bottom:0px;">
                    <thead>
                      <tr>
                        <th>登录IP</th>
                        <th>登录时间</th>
                        <th>状态</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>::1:55570</td>
                        <td>2016-01-08 15:50:28</td>
                        <td>成功</td>
                      </tr>
                      <tr>
                        <td>::1:64377</td>
                        <td>2016-01-08 10:27:44</td>
                        <td>成功</td>
                      </tr>
                      <tr>
                        <td>::1:64027</td>
                        <td>2016-01-08 10:19:25</td>
                        <td>成功</td>
                      </tr>
                      <tr>
                        <td>::1:57081</td>
                        <td>2016-01-06 10:35:12</td>
                        <td>成功</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">朕已阅</button>
              </div>
            </div>
          </div>
        </div>-->
        <!--微信二维码模态框-->
        <div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
          <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">Scan QR Code</h4>
              </div>
              <div class="modal-body" style="text-align:center"> <img src="{{asset('images/PeiChenweixin.jpg')}}" alt="" style="cursor:pointer"/> </div>

            </div>
          </div>
        </div>
        <!--提示模态框-->
        <div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">Working on it..</h4>
              </div>
              <div class="modal-body"> <img src="{{asset('images/baoman/baoman_01.gif')}}" alt="Thinking for ideas..." />
                <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">I am so sorry, this functionality is still under development...</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
              </div>
            </div>
          </div>
        </div>
        <!-- 右键菜单列表 -->
        <div id="rightClickMenu">
          <ul class="list-group rightClickMenuList">
            <li class="list-group-item disabled">欢迎访问异清轩博客</li>
            <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
            <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
            <li class="list-group-item"><span>系统：</span>Windows10 </li>
            <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
          </ul>
        </div>
