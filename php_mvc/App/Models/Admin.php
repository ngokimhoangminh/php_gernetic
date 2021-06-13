<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Admin extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function login_admin($email,$password)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM tbl_admin where admin_email='$email' and admin_password='$password' Order By admin_id limit 1");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
