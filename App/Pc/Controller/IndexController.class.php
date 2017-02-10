<?php
namespace Pc\Controller;
use Think\Controller;
class IndexController extends PublicController 
{
    /**
     * 首页
     */
    public function index()
    {
        $account = M('account');
        $accounts = $account->where(array('id'=>session('userid')))->find();

        //账户余额
        $balance = sprintf("%.2f",$accounts['money'] / 10 / 10);
        $this->assign('balance',$balance);
        $this->assign('accounts',$accounts);
        $this->display();
        
    }


    public function _empty()
    {
        $this->display('Public/404');
    }

  
}