<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Category extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function list_category_product()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM tbl_category ORDER BY category_id DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function insert_category($category_name,$category_des,$category_status)
    {
        $db = static::getDB();
        $sql = "INSERT INTO tbl_category(category_name,category_des,category_status) 
        VALUES('$category_name','$category_des','$category_status')";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$category_name, $category_des, $category_status]);
    }
    public static function category_product_by_id($catid)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM tbl_category where category_id = '$catid' ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function edit_category($cat_id,$category_name,$category_des)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_category SET category_name='$category_name',category_des ='$category_des' WHERE category_id='$cat_id'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$cat_id,$category_name, $category_des]);
    }
    public static function unactive__status_category($cat_id)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_category SET category_status=0 WHERE category_id='$cat_id'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$cat_id]);
    }
    public static function active_status_category($cat_id)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_category SET category_status=1 WHERE category_id='$cat_id'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$cat_id]);
    }
    public static function delete_category($catid)
    {
        $db = static::getDB();
        $stmt=$db->prepare("DELETE FROM tbl_category WHERE category_id=:catid");
        $stmt->bindParam(":catid",$catid,PDO::PARAM_INT);
        $stmt->execute();
    }
}
