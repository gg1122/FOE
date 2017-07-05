<?php
//1.定义命名空间
namespace Home\Controller;
//2.引入父类控制器
use Common\Controller\AccountsController;

//3.定义控制器并且继承父类
class BaseController extends AccountsController{

    public function _initialize(){
        //网站状态
        if(C('WEB_STATUS')=='close'){
            $this->display('Public/close');
        }
    }
    

 
}
