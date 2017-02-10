<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>云狄钱包</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-8">
<link href="/Public/Admin/css/home.css?v=2" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="wrap">
  <div class="banner-show" id="js_ban_content">
    <div class="cell bns-01">
      <div class="con"> </div>
    </div>
    <div class="cell bns-02" style="display:none;">
      <div class="con"> <a href="" target="_blank" class="banner-link"> <i>圈子</i></a> </div>
    </div>
    <div class="cell bns-03" style="display:none;">
      <div class="con"> <a href="" target="_blank" class="banner-link"> <i>企业云</i></a> </div>
    </div>
  </div>
  <div class="banner-control" id="js_ban_button_box"> <a href="javascript:;" class="left">左</a> <a href="javascript:;" class="right">右</a> </div>
  <script type="text/javascript">
                (function(){
                    
                    var defaultInd = 0;
                    var list = $('#js_ban_content').children();
                    var count = 0;
                    var change = function(newInd, callback){
                        if(count) return;
                        count = 2;
                        $(list[defaultInd]).fadeOut(400, function(){
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                        $(list[newInd]).fadeIn(400, function(){
                            defaultInd = newInd;
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                    }
                    
                    var next = function(callback){
                        var newInd = defaultInd + 1;
                        if(newInd >= list.length){
                            newInd = 0;
                        }
                        change(newInd, callback);
                    }
                    
                    var start = function(){
                        if(start.timer) window.clearTimeout(start.timer);
                        start.timer = window.setTimeout(function(){
                            next(function(){
                                start();
                            });
                        }, 8000);
                    }
                    
                    start();
                    
                    $('#js_ban_button_box').on('click', 'a', function(){
                        var btn = $(this);
                        if(btn.hasClass('right')){
                            //next
                            next(function(){
                                start();
                            });
                        }
                        else{
                            //prev
                            var newInd = defaultInd - 1;
                            if(newInd < 0){
                                newInd = list.length - 1;
                            }
                            change(newInd, function(){
                                start();
                            });
                        }
                        return false;
                    });
                    
                })();
            </script>
  <div class="container">
    <div class="register-box">
      <div class="reg-slogan">欢迎登陆云狄钱包管理后台！</div>
      <div class="reg-form" id="js-form-mobile"> <br>
        <br>
        <form action="" method="post" onsubmit="return formss()">
        <div class="cell">
          <label></label>
          <input type="text" name="name" placeholder="用户名"  class="text" maxlength="11" />
        </div>
        <div class="cell">
          <label></label>
          <input type="password" name="passwd"  class="text"  placeholder="密码"/>
          </div>
        <div class="cell vcode">
          <label></label>
          <input type="text" name="code" id="code" class="text" maxlength="6" placeholder="验证码" />
          <a href="javascript:;" id="js-get_mobile_vcode" class="button btn-disabled">
          <img src="<?php echo U('Login/code');?>" alt="验证码" onclick="this.src='<?php echo U('Login/code');?>?'+Math.random()" /></a> </div>
        <div class="bottom"> <button id="js-mobile_btn" type="submit" class="button btn-green">登录</button></div>
        <div style="width:330px;margin:0 auto;text-align:center;margin-top:50px;color:#f00;font-size:15px;" id="error"><?php echo ($_GET['error']); ?></div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script>
function formss(){
	var data = {
		'name'   : $('input[name=name]').val(),
		'passwd' : $('input[name=passwd]').val(),
		'code'   : $('input[name=code]').val(),
	};
	if(!data['name']){$('#error').html('用户名不能为空！');return false;}
	if(!data['passwd']){$('#error').html('密码不能为空！');return false;}
	if(!data['code']){$('#error').html('验证码不能为空！');return false;}

	$.post("<?php echo U('Admin/Login/index');?>", data, function(res){
		if(res == 1){
			window.location.href = "<?php echo U('Index/index');?>";
		}else{
			$('#error').html(res);return false;
		}
	})

	return false;
}

</script>
</html>