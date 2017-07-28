<?php

namespace app\controllers\admin;

use app\models\Admins;


class AdminsController extends AppController
{

    public function login()
    {
        if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            $this->redirect('/admin/test');
        };

        if ($this->isPost()) {
            $data = $_POST;
            extract($data);
            if (!empty($login) && !empty($pass)) {
                $config = require ROOT . '/config/config.php';
                $model = new Admins();
                $admin = $model->getAdmin();
                if ($login == $admin->login && md5($pass . $config['security_salt']) == $admin->pass) {
                    if (isset($rememberMe) && $rememberMe == 'on') {
                        $this->setCookie("admin_login", $login);
                        $this->setCookie("admin_pass", $pass);
                    }
                    session_start();
                    $_SESSION['admin'] = true;
                    $this->redirect('/');
                }
            }
            $this->redirect('/admin/login');
        }
    }

    public function test()
    {

    }

    public function logout()
    {
        session_start();
        unset($_SESSION['admin']);
        unset($_COOKIE['admin']);
        $this->redirect('/');

    }
}