
 <style type="text/css">
  .row{
    padding-top: 15px;
  }
</style>
<body>
   
           <a role="button" data-toggle="modal" data-target="#login"  style="color:white;">
            <i class="fa fa-user" aria-hidden="true"></i></i>Đăng nhập</a>
 
            
            <div id="login" class="modal fade" role="dialog">
               <div class="modal-dialog">
                    <div class="modal-content" style="background:#BCF5A9;margin-top: 100px;">
                              
                        <div class="modal-header" style="background: #F781F3;">
                            <button type="modal-button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color: #FF4000;text-align: center;">ĐĂNG NHẬP HỆ THỐNG</h4>
                        </div>
                      <div class="modal-body">
                          
                            <div class="row">
                                <div class="col-sm-5"><label>Tên đăng nhập:</label></div>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" id="usernameLogin"/>
                                </div>

                                
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-5"><label>Mật khẩu</label>:</div>
                                <div class="col-sm-7">
                                    <input class="form-control" type="password" id="passwordLogin" />
                                </div>
                                
                            </div>
                            <div class="row">
                                     <div id="error" style="text-align: center;color: red;">
                                       
                                        </div>
                             </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="login-btn">Đăng nhập</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                       
                        </div>
                     </div>
                    
                </div>
            </div>
 <script type="text/javascript">
      $(document).ready(function(){
         $('#login-btn').click(function(){
            var username = $('#usernameLogin').val();
            var password = $('#passwordLogin').val();
            
      
            
            if(username==''){
              
               $('#error').html("**Bạn vui lòng điền tài khoản**");
              
             
            }
            else if(password=='')
            {

               $('#error').html("**Bạn vui lòng điền mật khẩu**");
               
              
            }

            else
           
            {

                var dataString = 'username='+ username +  '&password='+ password;
              
                 $.ajax({
                       type    : "POST",
                       url     : 'log_in.php',
                       data    :  dataString,
                       success : function(text){
                          if(text=='false'){
                            $('#error').html("Tên tài khoản hoặc mật khẩu không chính xác");
                      
                          }
                          else{
                          
                            window.location='user_client/user.php?username='+text;
                           //alert(text);


                            setTimeout(function(){
                                $('#myModal').modal('hide');
                                $('.alert-danger').addClass('hide');
                                $('.alert-success').addClass('hide');
                            }, 3000);
                                  }
                        
                       }
                    });


              }

             return false;
         });
     });

 </script>
</body>

