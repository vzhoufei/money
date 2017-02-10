<?php
namespace Admin\Controller;

use Think\Controller;
class LoginController extends Controller 
{

    /**
     * 登录
     */
    public function index()
    {
        if(IS_POST){
            $post = I('post.');
            // 验证验证码
             $verify = new \Think\Verify(); 
             $code = $verify->check($post['code']);
             if(!$code){
                 $this->ajaxReturn('验证码错误!');
             }
             $admin = M('admin');
             $pwd = md5($post['passwd']);
             $res = $admin->where(array('name'=>$post['name']))->find();
             
             if($res){
                $res2 = $admin->where(array('name'=>$res['name'],'pwd'=>md5($pwd.$res['pwd_str'])))->find();
                if($res2){
                     session('adminuser',$res2['id']);
                    $this->ajaxReturn(1);
                    
                }else{

                    $this->ajaxReturn('密码错误！');
                }
             }else{
                if(!$res){$this->ajaxReturn('用户名不存在！');}
             }

             $this->redirect('Index/index');
        }else{

            // dump(session());
            if(session('adminuser')){$this->success('请不要重复登录！','Index/index');exit;}
            $this->display('login');
        }
    }



    /**
     * 退出登录
     */
    public function logout()
    {
        session('adminuser',null);
        $this->redirect('Admin/Login/login');
    }




    /**
     * 验证码
     */
    public function code()
    {
        $config = array('fontSize' => 30,'useCurve' => false,'length'=>3);
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }


    public function _empty()
    {
        $this->display('Public/404');
    }
   





    
}