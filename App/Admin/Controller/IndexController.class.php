<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends PublicController {
    public function index()
    {
        $str = md5('sgfklg[jkapo');
        $admin =  md5(md5('admin').$str);
        // dump($admin);
        session(null);
    }

    public function test()
    {
    	$int = '50000000000';
    	$a = $int;

    	$b = $a / 10 / 10;
    	var_dump($b);
    }
}