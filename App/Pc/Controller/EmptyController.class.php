<?php
namespace Pc\Controller;
use Think\Controller;
class EmptyController extends Controller 
{

    public function _empty()
    {
        $this->display('Public/404');
    }
    
}