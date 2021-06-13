
<?php include 'inc/header.php';?>
<!-- Main Slider Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                    	<?php
                    		foreach ($variable as $key => $value) 
                    		{
                    	?>
                       <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i><?= $value['category_name'];?></a>
                        </li>
                        <?php
							}
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    <div class="header-slider-item">
                        <img src="/Gernetic/php-mvc/public/assets/frontend/img/slider-1.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Mua Sắm Thỏa Đam Mê Của Bạn</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="/Gernetic/php-mvc/public/assets/frontend/img/slider-2.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Thỏa Đam Mê Mua Sắm Ở Mọi Nơi</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="/Gernetic/php-mvc/public/assets/frontend/img/slider-3.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Thỏa Đam Mê Mua Sắm Ở Mọi Nơi</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-1.jpg" />
                        <a class="img-text" href="">
                            <p>Thời Trang Hiện Đại</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-2.jpg" />
                        <a class="img-text" href="">
                            <p>Thời Trang Cho Bé</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->      

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

<!-- Feature Start-->
<div class="feature">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fab fa-cc-mastercard"></i>
                    <h2>Thanh toán an toàn</h2>
                    <p>
                        An toàn, tiện lợi với nhiều hình thức thanh toán
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-truck"></i>
                    <h2>Vận chuyển cả nước</h2>
                    <p>
                        Đơn vị vận chuyển nhanh chóng, tiết kiệm
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-sync-alt"></i>
                    <h2>14 ngày hoàn trả</h2>
                    <p>
                        Đảm bảo quyền lợi người tiêu dùng
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-comments"></i>
                    <h2>Hỗ trợ 24/7</h2>
                    <p>
                        Trả lời những thắc mắc của bạn
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->      

<!-- Category Start-->
<div class="category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-3.jpg" />
                    <a class="category-name" href="">
                        <p>Thời trang dành cho những cặp đôi</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-250">
                    <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-4.jpg" />
                    <a class="category-name" href="">
                        <p>Mỹ phẩm an toàn với thiên nhiên</p>
                    </a>
                </div>
                <div class="category-item ch-150">
                    <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-5.jpg" />
                    <a class="category-name" href="">
                        <p>Thời trang hiện đại</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-150">
                    <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-6.jpg" />
                    <a class="category-name" href="">
                        <p>Thời trang hiện đại</p>
                    </a>
                </div>
                <div class="category-item ch-250">
                    <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-7.jpg" />
                    <a class="category-name" href="">
                        <p>Thời trang hiện đại</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="/Gernetic/php-mvc/public/assets/frontend/img/category-8.jpg" />
                    <a class="category-name" href="">
                        <p>Đàm dạ hội quý phái</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category End-->       

<!-- Call to Action Start -->
<div class="call-to-action">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Gọi ngay cho chúng tôi</h1>
            </div>
            <div class="col-md-6">
                <a href="tel:0123456789">+012-345-6789</a>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->       

<!-- Featured Product Start -->
<div class="featured-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Sản Phẩm Nổi Bật</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            <?php
            foreach ($fe_product as $key => $rs_fe_product) {
            ?>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#"><?php echo $rs_fe_product['product_name'] ?></a>
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
                            <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $rs_fe_product['product_image'] ?>" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span><?php echo number_format($rs_fe_product['product_price'], 0, ',', '.') ?></h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <?php
        }
            ?>
            
        </div>
    </div>
</div>
<!-- Featured Product End -->       

<!-- Newsletter Start -->
<div class="newsletter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>Đăng ký bản tin của chúng tôi</h1>
            </div>
            <div class="col-md-6">
                <div class="form">
                    <input type="email" value="Your email here">
                    <button>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->        

<!-- Recent Product Start -->
<div class="recent-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Sản Phẩm Gần Đây</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            <?php
            foreach ($re_product as $key => $rs_re_product) {
            ?>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#"><?php echo $rs_re_product['product_name'] ?></a>
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
                            <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $rs_re_product['product_image'] ?>" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span><?php echo number_format($rs_re_product['product_price'], 0, ',', '.') ?></h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
           <?php
                }
             ?>
        </div>
    </div>
</div>
<!-- Recent Product End -->
       
<?php include 'inc/footer.php';?>
