<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Product extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function recommend_product($brandid)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT tbl_product.*,tbl_category.category_name,tbl_brand.brand_name FROM tbl_product 
            INNER JOIN tbl_category ON tbl_product.category_id=tbl_category.category_id 
            INNER JOIN tbl_brand ON tbl_product.brand_id=tbl_brand.brand_id
            where tbl_brand.brand_id='$brandid'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function product_detail($productid)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT tbl_product.*,tbl_category.category_name,tbl_brand.brand_name FROM tbl_product 
            INNER JOIN tbl_category ON tbl_product.category_id=tbl_category.category_id 
            INNER JOIN tbl_brand ON tbl_product.brand_id=tbl_brand.brand_id
            where tbl_product.product_id='$productid'
            ORDER BY  tbl_product.product_id desc ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function product_list()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM tbl_product where product_status=1 ORDER BY product_id DESC' );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function list_product()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT tbl_product.*,tbl_category.category_name,tbl_brand.brand_name FROM tbl_product INNER JOIN tbl_category ON tbl_product.category_id=tbl_category.category_id INNER JOIN tbl_brand ON tbl_product.brand_id=tbl_brand.brand_id
                ORDER BY  tbl_product.product_id desc ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     public static function product_by_id($productid)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM tbl_product where product_id = '$productid' ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function insert_product($brand_id,$category_id,$product_name,$product_des,$product_price,$product_image,$product_status)
    {
        $db = static::getDB();
        $sql = "INSERT INTO tbl_product(brand_id,category_id,product_name,product_des,product_price,product_image,product_status) 
        VALUES('$brand_id','$category_id','$product_name','$product_des','$product_price','$product_image','$product_status')";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$brand_id, $category_id, $product_name,$product_des,$product_price,$product_image,$product_status]);
    }
    public static function edit_product($productid,$brand_id,$category_id,$product_name,$product_des,$product_price,$product_image)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_product SET brand_id='$brand_id',category_id ='$category_id', product_name='$product_name', product_des='$product_des', product_price='$product_price',product_image='$product_image' WHERE product_id='$productid'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$productid,$brand_id, $category_id,$product_name,$product_des,$product_price,$product_image]);
    }
    public static function edit_product_no_image($productid,$brand_id,$category_id,$product_name,$product_des,$product_price)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_product SET brand_id='$brand_id',category_id ='$category_id', product_name='$product_name', product_des='$product_des', product_price='$product_price' WHERE product_id='$productid'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$productid,$brand_id, $category_id,$product_name,$product_des,$product_price]);
    }
    public static function unactive__status_product($productid)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_product SET product_status=0 WHERE product_id='$productid'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$productid]);
    }
    public static function active_status_product($productid)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_product SET product_status=1 WHERE product_id='$productid'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$productid]);
    }
    public static function delete_product($productid)
    {
        $db = static::getDB();
        $stmt=$db->prepare("DELETE FROM tbl_product WHERE product_id=:productid");
        $stmt->bindParam(":productid",$productid,PDO::PARAM_INT);
        $stmt->execute();
    }

    
}
