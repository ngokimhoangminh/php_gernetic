<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Brand;
use App\Models\Category as CategoryModel;
use App\Helpers\Session;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Category extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function list_categoryAction()
    {
        $category = CategoryModel::list_category_product();
        View::render('Admin/list_category.php', compact('category'));
       
    }
    public function update_categoryAction()
    {
        //var_dump($this->route_params);die();
        
        $id=$this->route_params["catid"];
        // if(isset($_POST['submit']))
        // {
        //     $this->edit_category($this->route_params["Catid"]);
        // }
        $categorybyid = CategoryModel::category_product_by_id($id);
        //var_dump($categorybyid);die;
        View::render('Admin/update_category.php',compact('categorybyid'));
    }
    public function add_categoryAction()
    {
        View::render('Admin/add_category.php');
    }
    public function save_categoryAction()
    {
        if(isset($_POST['save_category']))
        {
            $category_name=$_POST['category_name'];
            $category_des=$_POST['category_des'];
            $category_status=$_POST['category_status'];

            $category=CategoryModel::insert_category($category_name,$category_des,$category_status);
            if($category)
            {
                Session::set('message','Thêm danh mục sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_category");
            }else
            {
                Session::set('message','Thêm không thành công');
                header("Location:/Gernetic/php-mvc/public/add_category");
            }
             
        }
    }
    public function edit_categoryAction() {
        // edit code here
        if(isset($_POST['update_category_product']))
        {
            $id=$this->route_params["catid"];
            $category_name=$_POST['category_name'];
            $category_des=$_POST['category_des'];
            $category=CategoryModel::edit_category($id,$category_name,$category_des);
            if($category)
            {
                Session::set('message','Cập nhật danh mục sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_category"); 
            }else
            {
                Session::set('message','Cập nhật danh mục sản phẩm thất bại');
                header("Location:/Gernetic/php-mvc/public/update_category/$id"); 
            }
        }
    }
    public function delete_categoryAction()
    {
        $id=$this->route_params["catid"];
        $category=CategoryModel::delete_category($id);
        if($category)
        {
            Session::set('message','Xóa danh mục sản phẩm thành công');
            header("Location:/Gernetic/php-mvc/public/list_category"); 
        }else
        {
            Session::set('message','Xóa danh mục sản phẩm thất bại');
            header("Location:/Gernetic/php-mvc/public/list_category"); 
        }
    }
    public function unactive_categoryAction()
    {
        $id=$this->route_params["catid"];
        $category=CategoryModel::unactive__status_category($id);
        if($category)
        {
            Session::set('message','Đã hủy duyệt thành công');
            header("Location:/Gernetic/php-mvc/public/list_category"); 
        }
    }
    public function active_categoryAction()
    {
        $id=$this->route_params["catid"];
        $category=CategoryModel::active_status_category($id);
        if($category)
        {
            Session::set('message','Đã duyệt thành công');
            header("Location:/Gernetic/php-mvc/public/list_category"); 
        }
    }
}
?>
