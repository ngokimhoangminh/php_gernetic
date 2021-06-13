<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Cart extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
   

    public static function insert_cart($product_id,$product_name,$product_price,$product_image,$product_quantity,$product_size,$product_color)
    {
        $db = static::getDB();
        $sql = "INSERT INTO tbl_cart(product_id,product_name,product_price,product_image,product_quantity,product_size,product_color) 
        VALUES('$product_id','$product_name','$product_price','$product_image','$product_quantity','$product_size','$product_color')";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$product_id, $product_name, $product_price,$product_image,$product_quantity,$product_size,$product_color]);
    }
    public static function cart_content()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * from tbl_cart
                ORDER BY card_id desc ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
   
   

    
}
