<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的钱包-云狄</title>
  <link rel="stylesheet" href="/Public/Pc/css/public.css">
  <link rel="stylesheet" href="/Public/Pc/css/index.css">
  <link rel="stylesheet" href="/Public/Pc/css/reset.css">
</head>
<body>
    
	
		<div class="header clearfix">
		<div class="public-container">
			<a class="header-l" href="">
				<img src="/Public/Pc/images/home.png" alt="">
				<span>云狄网</span>
			</a>
			<div class="header-r">
				<div><span>你好,</span><span><?php echo ($accounts['name']); ?></span></div>
				<div><a href="<?php echo U('Login/exitlogin');?>">退出</a><span>|</span><a href="<?php echo U('Index/index');?>">云狄钱包</a></div>
			</div>
		</div>
        </div>
        
       <div class="public-container">
       <header class="clearfix">
       	<div class="logo">
       		<img src="/Public/Pc/images/logo.png" alt="">
       	</div>
       	<div class="wallet">
       		<a href="" class="active-2">我的钱包</a><a href="">交易记录</a>
       	</div>
       </header>
       </div>
       
       <div class="Navigation">
       	   <div class="Navigation-t">
       	   <div class="public-container">
       	       <ul class="clearfix">
       	   	   <li><a href="">首页</a></li>
       	   	   <li><a href="">账户管理</a></li></ul></div>
       	   </div>

          <div class="Navigation-b">
          	<div class="public-container clearfix">

          		<div class="Nav-b-l clearfix">
          			<div class="Head-portrait">
          				<img src="/Public/Pc/images/Head-portrait.png" alt="">
          			</div>
                    <div class="head-p-r">
          				<div class="head-p-r-t">
          					<span>你好,<?php echo ($accounts['name']); ?></span><a href="">点击上传头像</a>
          					<div class="head-p-und"></div>
          				</div>
                    <div class="head-p-r-b">
          				<span>账号:12345678912</span>| <span>上次登录时间：2014-07-07  20 : 21 : 40</span>		
          			</div>
          		</div>
                </div>
                 
                <div class="Nav-b-r">
                	<div class="balance">
                		账户余额<span><?php echo ($balance); ?>元</span>
                	</div>
                	<div class="balance-btn">
                		<a href="">充值</a>
                		<a href="">提现</a>
                		<a href="">转账</a>
                	</div>
                </div> 
          	</div>
          </div>
       </div>
<!--  -->
		<div class="public-container">
        <div class="transaction">
        	<ul class="tran-tle">
        		<li class="tran-item active-1">
        			交易记录
        		</li>
        		<li class="tran-item">
        			充值记录
        		</li>
        		<li class="tran-item">
        			提现记录
        		</li>
        		<li class="tran-item">
        			退款记录
        		</li>
        	</ul>
    <ul class="tran-txt">
    <!-- 交易记录 -->
    <li>
    <div class="tran-txb">
   	<span>时间</span><span>交易原因</span><span>金额</span><span>交易状态</span><span>操作</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    <div class="tran-txb">
    	<span>2017.8..12</span><span>余额转出到银行卡</span><span>1000.00</span><span>提现成功</span><span>删除</span>
    </div>
    </li>
<!-- 充值记录 -->
    <li>
    <div class="tran-txb">
   	<span>时间</span><span>交易原因</span><span>金额</span><span>交易状态</span><span>操作</span>
    </div>
    </li>
  <!-- 提现记录 -->  
    <li>
    <div class="tran-txb">
   	<span>时间</span><span>交易原因</span><span>金额</span><span>交易状态</span><span>操作</span>
    </div>
    </li>
<!-- 退款记录 -->
    <li>
    <div class="tran-txb">
   	<span>时间</span><span>交易原因</span><span>金额</span><span>交易状态</span><span>操作</span>
    </div>
    </li>            
    </ul>
    </div>
<!--  -->
    <div class="transaction-pic">
    	<img src="/Public/Pc/images/banner-2.png" alt="">
    </div>
    <div class="copyright">
    	<p>广州云狄建站科技有限公司 版权所有</p>
    	<p>粤ICP备09116842号</p>
    </div>
    </div>
    <script src="/Public/Pc/js/index.js"></script>  
</body>
</html>