<?php
namespace App\Helpers;

use PDO;
/**
*Session Class
**/
class Session{
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }

 public static function set($key, $val){
    $_SESSION[$key] = $val;
 }

 public static function get($key){
    if (isset($_SESSION[$key])) {
     return $_SESSION[$key];
    } else {
     return false;
    }
 }
//kiểm tra xem phiên làm việc có tồn tại hay không
 public static function checkSession(){
    self::init();
    if (self::get("admin_id")== false) {
     self::destroy();
     header("Location:?action=login");
    }
 }

 public static function checkLogin(){
    self::init();
    if (self::get("admin_id")== true) {
      header("Location:/Gernetic/php-mvc/public/dashboard");
    }else
    {
      header("Location:/Gernetic/php-mvc/public/admin");
    }
 }

 public static function destroy(){
  session_destroy();
  header("Location:/Gernetic/php-mvc/public/admin");
 }
}
?>

