<?php
namespace Pc\Controller;
use Think\Controller;
class LoginController extends Controller 
{
    //登录
    public function index()
    {
        if(IS_POST){
            $account = M('account');
            if(!$account->autoCheckToken($_POST)){$this->error('令牌错误！');}
            $verify = new \Think\Verify();    
            if(!$verify->check($_POST['code'])){$this->error('验证码错误！');}
            $where['name'] = $_POST['name'];
            $where['email'] = $_POST['name'];
            $where['mobile'] = $_POST['name'];
            $where['_logic'] = 'or';
            $map['_complex'] = $where;
            $res = $account->where($map)->find();
            if($res){

                $map['pass'] = md5(md5($_POST['pass']).$res['pass_str']);
                $res2 = $account->where($map)->find();

                if($res2){
                    //账户是否正常
                    if(!$res['status']){
                        $this->error('账户被关闭!');
                    }
                    session('userid',$res2['id']);
                    S('sessiontime',1,3600);//30分钟无动作删除session
                    $this->redirect('Index/index');
                }else{
                    $this->error('账户或密码错误！');
                }
            }else{
                $this->error('账户不存在！');
            }

            
        }else{
            if(session('userid') && S('sessiontime')){
                $this->redirect('Index/index');
            }
            $this->display('login');
        }
    }

    //登录日志
    public function loginlog($error)
    {
        $data = getIpInfo($_SERVER['REMOTE_ADDR']);
    }


    //退出登录
    public function exitlogin()
    {
        session(null);
        S('sessiontime',null);
        $this->redirect('Login/index');
    }



    //验证码
    public function code()
    {
        $config =    array(    
        'fontSize'    =>    30,    // 验证码字体大小    
        'length'      =>    4,     // 验证码位数    
        'useNoise'    =>    true, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }


    public function _empty()
    {
        $this->display('Public/404');
    }

   
}