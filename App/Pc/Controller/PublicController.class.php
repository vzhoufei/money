<?php
namespace Pc\Controller;
use Think\Controller;
class PublicController extends Controller 
{

    public function _initialize()
    {
        //30分钟无动作删除session
        if(session('userid') && S('sessiontime')){
            S('sessiontime',1,3600);
        }else{
            session(null);
            $this->redirect('Login/index');
        }
    }


    public function _empty()
    {
        $this->display('Public/404');
    }
   
}