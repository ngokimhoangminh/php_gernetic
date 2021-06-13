<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Brand;
use App\Models\Category;
use App\Helpers\Session;
use App\Models\Admin as AdminModel;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Admin extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */

    public function check_login()
    {
        $admin_id=Session::get('admin_id');
        if($admin_id)
        {
            header("Location:/Gernetic/php-mvc/public/dashboard");
        }else
        {
            header("Location:/Gernetic/php-mvc/public/admin");
        }
    }
    public function adminAction()
    {
        view::render('Admin/login.php');
    }
    public function dashboardAction()
    {
        // var_dump($this->route_params["id"]); die;
        $this->check_login();
        View::render('Admin/index.php');
    }
    public function loginAction()
    {
        if( isset($_POST['login'])) {
            //var_dump($_POST['admin_pass']); die();
            $admin_pass=md5($_POST['admin_pass']);
            $admin_email=$_POST['admin_email'];
            $result=AdminModel::login_admin($admin_email,$admin_pass);

            if($result)
            {
                Session::set('admin_id',$result['admin_id']);
                Session::set('admin_name',$result['admin_name']);
                header("Location:/Gernetic/php-mvc/public/dashboard");
                //return require_once "/dashboard";
                }
            else
            {
                Session::set('message','Tên đăng nhập hoặc mật khẩu không đúng');
                header("Location:/Gernetic/php-mvc/public/admin");
            }

        }
    }
    public function logoutAction()
    {
        $this->check_login();
        Session::set('admin_name',null);
        Session::set('admin_id',null);
        header("Location:/Gernetic/php-mvc/public/admin");
    }
    private function edit($request) {
        // edit code here
        $request['id'];
    }

}
?>
