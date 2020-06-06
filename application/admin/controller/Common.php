<?php
namespace app\admin\controller;

use app\admin\library\Auth;
use think\Controller;

class Common extends Controller
{
    protected $checkLoginExclude = [];
    protected $auth;
    public function initialize()
    {
        $this->auth = Auth::getInstance();
        $controller = $this->request->controller();
        $action=$this->request->action();
        if (in_array($action, $this->checkLoginExclude)) {
            return;
        }
        if (!$this->auth->isLogin()) {
            $this->error('您还没有登录。','Index/login');
        }
    }
    //public function initialize()

}