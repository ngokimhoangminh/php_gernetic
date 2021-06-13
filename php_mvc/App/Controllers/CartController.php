<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Home as HomeModel;
use App\Models\Cart;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class CartController extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function add_to_cartAction()
    {
        if(isset($_POST['add_to_cart']))
        {
            $cart_product_id=$_POST['cart_product_id'];  
            $cart_product=Product::product_by_id($cart_product_id);
            foreach ($cart_product as $key => $cart_value) {
                $cart_product_name=$cart_value['product_name'];
                $cart_product_price=$cart_value['product_price'];
                $cart_product_image=$cart_value['product_image'];
            }
            $cart_product_quantity=$_POST['cart_product_quantity'];
            
            if(isset($_POST['color']) && isset($_POST['size']))
            {
                $cart_prouct_color=$_POST['color'];
                $cart_prouct_size=$_POST['size'];
                Cart::insert_cart($cart_product_id,$cart_product_name,$cart_product_price,$cart_product_image,$cart_product_quantity,$cart_prouct_size,$cart_prouct_color);
                header("Location:/Gernetic/php-mvc/public/show_cart");
            }else
            {
                header("Location:/Gernetic/php-mvc/public/product_detail/$cart_product_id");
            }
    
        }

    }
    public function show_cartAction()
    {
        $cart=Cart::cart_content();
        View::render('Home/cart-content.php',compact('cart'));
    }  
}
?>
