<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Brand as BrandModel;
use App\Models\Category;
use App\Helpers\Session;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Brand extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function list_brandAction()
    {
        $brand = BrandModel::list_brand_product();
        View::render('Admin/list_brand.php', compact('brand'));
       
    }
    public function add_brandAction()
    {

    	View::render('Admin/add_brand.php');
    }
    public function save_brandAction()
    {

    	if(isset($_POST['save_brand']))
        {
            $brand_name=$_POST['brand_name'];
            $brand_des=$_POST['brand_des'];
            $brand_status=$_POST['brand_status'];

            $brand=BrandModel::insert_brand($brand_name,$brand_des,$brand_status);
            if($brand)
            {
                Session::set('message','Thêm thương hiệu sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_brand");
            }else
            {
                Session::set('message','Thêm không thành công');
                header("Location:/Gernetic/php-mvc/public/add_brand");
            }
             
        }
    }
    public function update_brandAction()
    {
        $id=$this->route_params["brandid"];
        $brandbyid = BrandModel::brand_product_by_id($id);
        //var_dump($brandbyid);die;
        View::render('Admin/update_brand.php',compact('brandbyid'));
    }
    public function edit_brandAction()
    {
        if(isset($_POST['update_brand_product']))
        {
            $id=$this->route_params["brandid"];
            $brand_name=$_POST['brand_name'];
            $brand_des=$_POST['brand_des'];
            $brand=BrandModel::edit_brand($id,$brand_name,$brand_des);
            if($brand)
            {
                Session::set('message','Cập nhật thương hiệu sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_brand"); 
            }else
            {
                Session::set('message','Cập nhật thương hiệu sản phẩm thất bại');
                header("Location:/Gernetic/php-mvc/public/update_brand/$id"); 
            }
        }
    }
    public function delete_brandAction()
    {
    	$id=$this->route_params["brandid"];
    	//var_dump($id);die;
        $brand=BrandModel::delete_brand($id);
        if($brand)
        {
            Session::set('message','Xóa thương hiệu sản phẩm thành công');
            header("Location:/Gernetic/php-mvc/public/list_brand"); 
        }else
        {
            Session::set('message','Xóa thương hiệu sản phẩm thất bại');
            header("Location:/Gernetic/php-mvc/public/list_brand"); 
        }
    }
    public function unactive_brandAction()
    {
        $id=$this->route_params["brandid"];
        $brand=BrandModel::unactive__status_brand($id);
        if($brand)
        {
            Session::set('message','Đã hủy duyệt thành công');
            header("Location:/Gernetic/php-mvc/public/list_brand"); 
        }
    }
    public function active_brandAction()
    {
        $id=$this->route_params["brandid"];
        $brand=BrandModel::active_status_brand($id);
        if($brand)
        {
            Session::set('message','Đã duyệt thành công');
            header("Location:/Gernetic/php-mvc/public/list_brand"); 
        }
    }
}
