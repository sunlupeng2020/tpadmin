<?php
namespace app\admin\controller;

use app\admin\library\Auth;
use think\Controller;

class Common extends Controller
{
    protected $auth;
    public function initialize()
    {
        $this->auth = Auth::getInstance();
    }

}