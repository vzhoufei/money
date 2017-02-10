<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录</title>
</head>
<body>
<div style="width:500px;margin:0 auto;">

<form action="" method="post">
<input type="text" name="name" placeholder="用户名  邮箱  手机" /><br>
<input type="password" name="pass" placeholder="密码" /><br>
<input type="text" name="code" placeholder="验证码" /><br>
<img src="<?php echo U('Login/code');?>" onclick="this.src='<?php echo U('code');?>?'+Math.random();" />
<input type="submit" value="登录" />
</form>


</div>
</body>
</html>