<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Brand extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function list_brand_product()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM tbl_brand ORDER BY brand_id DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function insert_brand($brand_name,$brand_des,$brand_status)
    {
        $db = static::getDB();
        $sql = "INSERT INTO tbl_brand(brand_name,brand_des,brand_status) 
        VALUES('$brand_name','$brand_des','$brand_status')";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$brand_name, $brand_des, $brand_status]);
    }
    public static function delete_brand($brandid)
    {
        $db = static::getDB();
        $stmt=$db->prepare("DELETE FROM tbl_brand WHERE brand_id=:brandid");
        $stmt->bindParam(":brandid",$brandid,PDO::PARAM_INT);
        $stmt->execute();
    }
     public static function brand_product_by_id($brandid)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM tbl_brand where brand_id = '$brandid' ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function edit_brand($brand_id,$brand_name,$brand_des)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_brand SET brand_name='$brand_name',brand_des ='$brand_des' WHERE brand_id='$brand_id'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$brand_id,$brand_name,$brand_des]);
    }
    public static function unactive__status_brand($brand_id)
    {
        $db = static::getDB();
        $sql = "UPDATE tbl_brand SET brand_status=0 WHERE brand_id='$brand_id'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$brand_id]);
    }
    public static function active_status_brand($brand_id)
    {

        $db = static::getDB();
        $sql = "UPDATE tbl_brand SET brand_status=1 WHERE brand_id='$brand_id'";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$brand_id]);
    }
}
