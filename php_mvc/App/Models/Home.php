<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Home extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function list_category_home()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM tbl_category where category_status=1 ORDER BY category_id DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function recent_product()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM tbl_product where product_status=1 ORDER BY product_id DESC LIMIT 5' );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function feature_product()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM tbl_product where product_status=1 ORDER BY product_id ASC LIMIT 5' );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
