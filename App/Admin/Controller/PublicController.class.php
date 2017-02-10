<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller 
{
    public function _initialize()
    {
        if(!session('adminuser')){$this->redirect('Login/index');}
    }
   
}