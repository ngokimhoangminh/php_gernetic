<?php include 'inc/header.php';?>
        
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Gernetic/php-mvc/public">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/Gernetic/php-mvc/public/product_list">Sản Phẩm</a></li>
            <li class="breadcrumb-item active">Chi Tiết Sản Phẩm</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
            	<?php
            	foreach ($result_product_detail as $key => $dl_product) 
            	{
            	?>

                <div class="product-detail-top">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="product-slider-single normal-slider">
                                <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $dl_product['product_image']?>" alt="Product Image">
                                <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $dl_product['product_image']?>" alt="Product Image">
                                <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $dl_product['product_image']?>" alt="Product Image">
                                <img src="img/product-7.jpg" alt="Product Image">
                                <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $dl_product['product_image']?>" alt="Product Image">

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="product-content">

                            		<div class="title" name="cart_product_name"><h2><?php echo $dl_product['product_name']  ?></h2></div>
	                                <div class="ratting">
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                    <i class="fa fa-star"></i>
	                                </div>
	                                <div class="price">
	                                    <h4>Price:</h4>
	                                    <p><?php echo number_format($dl_product['product_price'], 0, ',', '.') ?> <span style="text-decoration: none;">VND</span></p>
	                                </div>
	                                <form role="form" action="/Gernetic/php-mvc/public/add_to_cart" method="POST" >
	                                	<div class="quantity">
		                                    <h4>Số lượng:</h4>
		                                    <div class="qty">
		                                        <span class="btn-minus"><i class="fa fa-minus"></i></span>
		                                        <input type="text" name="cart_product_quantity" value="1">
		                                        <span class="btn-plus"><i class="fa fa-plus"></i></span>
		                                    </div>
		                                </div>
		                                <div class="p-size">
		                                    <h4>Size:</h4>
		                                    <div class="btn-group btn-group-sm">
		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="size" id="S" value="S"  >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="S">S</label>
		                                        </button>
		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="size" id="M" value="M"  >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="M">M</label>
		                                        </button>
		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="size" id="L" value="L"  >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="L">L</label>
		                                        </button>
		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="size" id="XL" value="XL"  >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="XL">XL</label>
		                                        </button>
		                                    </div> 
		                                </div>
		                                <div class="p-color">
		                                    <h4>Màu sắc:</h4>
		                                    <div class="btn-group btn-group-sm">
		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="color" id="white" value="Trắng" >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="white">Trắng</label>
		                                        </button>

		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="color" id="black" value="Đen"  >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="black">Đen</label>
		                                        </button>
		                                        <button type="button" class="btn">
		                                        	<input type="radio" name="color" id="blue" value="Xanh" >
		                                        	<label style="margin-bottom: 0px; cursor: pointer;" for="blue">Xanh</label>
		                                        	
		                                        </button>
		                                    </div> 
		                                </div>
                            			<input type="hidden" name="cart_product_id" value="<?php echo $dl_product['product_id']  ?>">
		                                <div class="action">
		                                    <button type="submit" class="btn btn-info" name="add_to_cart" onclick="checkRadioButton()"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</button>
		                                    <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Mua Ngay</a>
		                                </div>
                            		</form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            	}

                ?>
                <?php
                	foreach ($result_product_detail as $key => $rs_product) {
                ?>
                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Mô Tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4>Mô Tả Sản Phẩm</h4>
                                <p><?php echo $rs_product['product_des']; ?></p>
                            </div>
                            
                            <div id="reviews" class="container tab-pane fade">
                                <div class="reviews-submitted">
                                    <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                                <div class="reviews-submit">
                                    <h4>Give your Review:</h4>
                                    <div class="ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="row form">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea placeholder="Review"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
                <div class="product">
                    <div class="section-header">
                        <h1>Sản Phẩm Liên Quan</h1>
                    </div>

                    <div class="row align-items-center product-slider ">
                    	<?php
                    		foreach ($result_product_recommend as $key => $re_product) {
                    	?>
                        <div class="col-lg-4">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#"><?php echo $re_product['product_name'] ?></a>
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
                                        <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $re_product['product_image'] ?>" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>$</span><?php echo number_format($re_product['product_price'], 0, ',', '.') ?></h3>
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
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
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
<!-- Product Detail End -->

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

