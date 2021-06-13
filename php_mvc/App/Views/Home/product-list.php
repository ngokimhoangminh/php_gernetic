<?php include 'inc/header.php';?>
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
            <li class="breadcrumb-item active">Danh Sách Sản Phẩm</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-view-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-search">
                                        <input type="email" value="Search">
                                        <button><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    foreach ($result_product as $key => $prduct) {
                    ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><?php echo $prduct['product_name'] ?></a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $prduct['product_image'] ?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="/Gernetic/php-mvc/public/product_detail/<?php echo $prduct['product_id'] ?>"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span><?php echo number_format($prduct['product_price'], 0, ',', '.') ?></h3>
                                <a class="btn" href="/Gernetic/php-mvc/public/product_detail/<?php echo $prduct['product_id'] ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div> 
                    <?php
                }
                    ?>
                </div>
                
                <!-- Pagination Start -->
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination Start -->
            </div>           
            
            <!-- Side Bar Start -->
            <div class="col-lg-3 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                        	<?php
                    		foreach ($result_category as $key => $category) 
                    		{
                    		?>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-female"></i><?php echo $category['category_name'] ?></a>
                            </li>
                            <?php
                        	}
                        	?>
                        </ul>
                    </nav>
                </div>
                
                <div class="sidebar-widget widget-slider">
                    <div class="sidebar-slider normal-slider">
                        <?php
                        foreach ($result_product as $key => $prduct) {
                        ?>
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><?php echo $prduct['product_name'] ?></a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $prduct['product_image'] ?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span><?php echo number_format($prduct['product_price'], 0, ',', '.') ?></h3>
                                <a class="btn" href="/Gernetic/php-mvc/public/product_detail/<?php echo $prduct['product_id'] ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                
                <div class="sidebar-widget brands">
                    <h2 class="title">Thương Hiệu </h2>
                    <ul>
                    	<?php
                    		foreach ($result_brand as $key => $brand) {
                    		 	# code...
                    	?>
                        <li><a href="#"></a><?php echo  $brand['brand_name'] ?></a><span>(45)</span></li>
                       <?php 
                   		}
                       ?>
                    </ul>
                </div>
                
                <div class="sidebar-widget tag">
                    <h2 class="title">Tags Cloud</h2>
                    <a href="#">Lorem ipsum</a>
                    <a href="#">Vivamus</a>
                    <a href="#">Phasellus</a>
                    <a href="#">pulvinar</a>
                    <a href="#">Curabitur</a>
                    <a href="#">Fusce</a>
                    <a href="#">Sem quis</a>
                    <a href="#">Mollis metus</a>
                    <a href="#">Sit amet</a>
                    <a href="#">Vel posuere</a>
                    <a href="#">orci luctus</a>
                    <a href="#">Nam lorem</a>
                </div>
            </div>
            <!-- Side Bar End -->
        </div>
    </div>
</div>
<!-- Product List End -->  

<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="/Gernetic/php-mvc/public/assets/frontend/img/brand-1.png" alt=""></div>
            <div class="brand-item"><img src="/Gernetic/php-mvc/public/assets/frontend/img/brand-2.png" alt=""></div>
            <div class="brand-item"><img src="/Gernetic/php-mvc/public/assets/frontend/img/brand-3.png" alt=""></div>
            <div class="brand-item"><img src="/Gernetic/php-mvc/public/assets/frontend/img/brand-4.png" alt=""></div>
            <div class="brand-item"><img src="/Gernetic/php-mvc/public/assets/frontend/img/brand-5.png" alt=""></div>
            <div class="brand-item"><img src="/Gernetic/php-mvc/public/assets/frontend/img/brand-6.png" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->
<?php include 'inc/footer.php';?>