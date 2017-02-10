<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>云狄钱包</title>
    <link rel="stylesheet" href="/Public/Pc/css/public.css">
    <link rel="stylesheet" href="/Public/Pc/css/reset.css">
    <link rel="stylesheet" href="/Public/Pc/css/login.css"> 
</head>
<body style="background:url(/Public/Pc/images/1V4nsyvMbt_src.jpg) no-repeat; background-size:100% auto;">
	<div class="header clearfix">
		<div class="public-container">
			<a class="header-l" href="">
				<img src="/Public/Pc/images/home.png">
				<span>云狄网</span>
			</a>
			<div class="header-r">
				<div><a href="">云狄钱包</a></div>
			</div>
		</div>
        </div>
        
       <div class="public-container clearfix">
       <header class="clearfix">
       	<div class="logo">
       		<img src="/Public/Pc/images/logo.png" alt="">
       	</div>
    
       </header>
<form action="" method="post">
        <div class="login clearfix">
       	  <h1>账号登录</h1>
       	  <ul>
       	  	<li>
       	  	   <span><img src="/Public/Pc/images/use.png"></span><input type="text" name="name" placeholder="用户名  邮箱  手机" />
       	  	</li>

       	  	<li>
       	  		 <span><img src="/Public/Pc/images/key.png"></span><input type="password" name="pass" placeholder="密码" />
       	  	</li>
            <li>
               <span><img src="/Public/Pc/images/key.png"></span><input type="text" name="code" placeholder="验证码" />
            </li>
       	  </ul>
          <img src="<?php echo U('Login/code');?>" onclick="this.src='<?php echo U('code');?>?'+Math.random();" style="width:100px;margin-left:31px;" />
       	  <a href="" class="fogkey">忘记登录密码？</a>
       	  <input  value="登录" class="log-btn" type="submit">
       	  <div class="resg">
       	  	<a href="" class="resg-1">云狄会员登录</a>
       	  	<a href="" class="resg-2">免费注册</a>
       	  </div>
       </div>
</form>
       </div>
        <div class="copyright">
    	<p>广州云狄建站科技有限公司 版权所有</p>
    	<p>粤ICP备09116842号</p>
    </div>   
      
</body>
</html>