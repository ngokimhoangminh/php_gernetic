<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product as ProductModel;
use App\Helpers\Session;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Product extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    
    public function list_productAction()
    {
        $product = ProductModel::list_product();
        View::render('Admin/list_product.php',compact('product'));
    }
    public function add_productAction()
    {
        $category = Category::list_category_product();
        $brand=Brand::list_brand_product();
        View::render('Admin/add_product.php',['result_category' => $category,
                                               'result_brand' => $brand ]);
    }
    public function save_productAction()
    {
        if(isset($_POST['save_product']))
        {
            $brand_id=$_POST['product_brand'];
            $category_id=$_POST['product_category'];
            $product_name=$_POST['product_name'];
            $product_des=$_POST['product_des'];
            $product_price=$_POST['product_price'];
            $product_status=$_POST['product_status'];

            $permited =array('jpg','jpeg','png','gif');
            $file_name=$_FILES['product_image']['name'];
            $file_size=$_FILES['product_image']['size'];
            $file_temp=$_FILES['product_image']['tmp_name'];

            $div=explode('.',$file_name);
            $file_ext=strtolower(end($div));
            $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
            //$uploaded_image="public/assets/backend/uploads/".$unique_image;
            if($unique_image)
            {
                $path=dirname(__DIR__)."../../public/assets/backend/uploads/".$unique_image;
                move_uploaded_file($file_temp,$path);
                move_uploaded_file($_FILES['product_image']['tmp_name'],"/Gernetic/php-mvc/public/assets/backend/uploads/".$unique_image);

                $product_image=$unique_image;
                $product=ProductModel::insert_product($brand_id,$category_id,$product_name,$product_des,$product_price,$product_image,$product_status);
                Session::set('message','Thêm sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_product");
            }else
            {
                $product_image='';
                $product=ProductModel::insert_product($brand_id,$category_id,$product_name,$product_des,$product_price,$product_image,$product_status);
                Session::set('message','Thêm sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_product");
            }
            
        }
    }
    public function update_productAction()
    {
        $productid=$this->route_params["productid"];
        $category = Category::list_category_product();
        $brand=Brand::list_brand_product();
        $product=ProductModel::product_by_id($productid);
        View::render('Admin/update_product.php',['result_category' => $category,
                                               'result_brand' => $brand,
                                               'result_product' => $product]);
    }
    public function edit_productAction()
    {
        $productid=$this->route_params["productid"];
        if(isset($_POST['update_product']))
        {
            $brand_id=$_POST['product_brand'];
            $category_id=$_POST['product_category'];
            $product_name=$_POST['product_name'];
            $product_des=$_POST['product_des'];
            $product_price=$_POST['product_price'];

            $permited =array('jpg','jpeg','png','gif');
            $file_name=$_FILES['product_image']['name'];
            $file_size=$_FILES['product_image']['size'];
            $file_temp=$_FILES['product_image']['tmp_name'];

            $div=explode('.',$file_name);
            $file_ext=strtolower(end($div));
            $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
            //$uploaded_image="public/assets/backend/uploads/".$unique_image;
            if($file_name)
            {
                $product_image=$unique_image;
                $product=ProductModel::edit_product($productid,$brand_id,$category_id,$product_name,$product_des,$product_price,$product_image);

                $path=dirname(__DIR__)."../../public/assets/backend/uploads/".$unique_image;
                move_uploaded_file($file_temp,$path);
                move_uploaded_file($_FILES['product_image']['tmp_name'],"/Gernetic/php-mvc/public/assets/backend/uploads/".$unique_image);
                Session::set('message','Cập nhật sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_product");
            }else
            {
                $path=dirname(__DIR__)."../../public/assets/backend/uploads/".$unique_image;
                move_uploaded_file($file_temp,$path);
                move_uploaded_file($_FILES['product_image']['tmp_name'],"/Gernetic/php-mvc/public/assets/backend/uploads/".$unique_image);
                $product=ProductModel::edit_product_no_image($productid,$brand_id,$category_id,$product_name,$product_des,$product_price);
                Session::set('message','Cập nhật sản phẩm thành công');
                header("Location:/Gernetic/php-mvc/public/list_product");
            }
            
        }
    }
    public function unactive_productAction()
    {
        $id=$this->route_params["productid"];
        $product=ProductModel::unactive__status_product($id);
        if($product)
        {
            Session::set('message','Đã hủy duyệt thành công');
            header("Location:/Gernetic/php-mvc/public/list_product"); 
        }
    }
    public function active_productAction()
    {
        $id=$this->route_params["productid"];
        $product=ProductModel::active_status_product($id);
        if($product)
        {
            Session::set('message','Đã duyệt thành công');
            header("Location:/Gernetic/php-mvc/public/list_product"); 
        }
    }
    public function delete_productAction()
    {
        $id=$this->route_params["productid"];
        $product=ProductModel::delete_product($id);
        if($product)
        {
            Session::set('message','Xóa sản phẩm thành công');
            header("Location:/Gernetic/php-mvc/public/list_product"); 
        }else
        {
            Session::set('message','Xóa sản phẩm thất bại');
            header("Location:/Gernetic/php-mvc/public/list_product"); 
        }
    }
    public function product_detailAction()
    {
            $id=$this->route_params["productid"];
         $category = Category::list_category_product();
         $brand=Brand::list_brand_product();
         $product=ProductModel::product_list();
         $product_detail=ProductModel::product_detail($id);

         foreach ($product_detail as $key => $dl_value) {
            $brand_id= $dl_value['brand_id'];
         }

         $recommend_product=ProductModel::recommend_product($brand_id);
         View::render('Home/product-detail.php',['result_category' => $category,
                                               'result_brand' => $brand,
                                               'result_product' => $product,
                                               'result_product_detail' => $product_detail,
                                               'result_product_recommend' => $recommend_product ]);
    }
}
