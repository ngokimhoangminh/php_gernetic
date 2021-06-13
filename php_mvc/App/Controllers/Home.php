<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Home as HomeModel;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $category = HomeModel::list_category_home();
        $recent_product=HomeModel::recent_product();
        $feature_product=HomeModel::feature_product();
        View::render('Home/index.php', ['variable' => $category,
                                        're_product' => $recent_product,
                                        'fe_product' => $feature_product]);
        //View::renderTemplate('Home/index.html');
    }

    public function product_listAction() {
         $category = Category::list_category_product();
         $brand=Brand::list_brand_product();
         $product=Product::product_list();
         View::render('Home/product-list.php',['result_category' => $category,
                                               'result_brand' => $brand,
                                               'result_product' => $product ]);
    }
    
}
?>
