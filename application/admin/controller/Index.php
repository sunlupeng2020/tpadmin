<?php
namespace app\admin\controller;

use think\Controller;

use app\admin\validate\AdminUser as UserValidate;

class Index extends Controller
{
    public function login()
    {
        if($this->request->isPost()){
            $data = [
                'username' => $this->request->post('username/s','','trim'),
                'password' => $this->request->post('password/s',''),
                'captcha' => $this->request->post('captcha/s', '','trim')
            ];
            $validate = new UserValidate;
            if (!$validate->scene('login')->check($data)) {
                $this->error('登录失败：' . $validate->getError() . '。');
            }
            $this->success('登录成功.');
        }
        return $this->fetch();
    }

}