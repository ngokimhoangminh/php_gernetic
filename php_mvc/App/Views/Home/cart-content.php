<?php include 'inc/header.php';?>
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Gernetic/php-mvc/public">Trang Chủ</a></li>
            <li class="breadcrumb-item"><a href="/Gernetic/php-mvc/public/product_list">Sản Phẩm</a></li>
            <li class="breadcrumb-item active">Giỏ Hàng</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-page-inner">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Cộng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <?php
                                foreach ($cart as $key => $cart_value) {
                                ?>
                                <tr>
                                    <td>
                                        <div class="img">
                                            <a href="#"><img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $cart_value['product_image'] ?>" alt="Image"></a>
                                            <p><?php echo $cart_value['product_name'] ?></p>
                                        </div>
                                    </td><?php echo $cart_value['product_name'] ?>
                                    <td><?php echo number_format($cart_value['product_price'], 0, ',', '.') ?></td>
                                    <td>
                                        <div class="qty">
                                            <span class="btn-minus"><i class="fa fa-minus"></i></span>
                                            <input type="text" value="<?php echo $cart_value['product_quantity'] ?>">
                                            <span class="btn-plus"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($cart_value['product_quantity']*$cart_value['product_price'], 0, ',', '.')  ?></td>
                                    <td><span><i class="fa fa-trash"></i></span></td>
                                </tr>
                                <?php
                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="cart-summary">
                                <?php
                                foreach ($cart as $key => $cart_vl) {
                                ?>
                                <div class="cart-content">
                                    <h1>Tóm Tắt Giỏ Hàng</h1>
                                    <p>Tổng Tiền<span><?php  echo number_format($cart_vl['product_quantity']*$cart_vl['product_price'], 0, ',', '.') ?></span></p>
                                    <p>Phí Giao Hàng<span>30.000</span></p>
                                    <h2>Tổng Cộng<span><?php  echo number_format($cart_vl['product_quantity']*$cart_vl['product_price']+30000, 0, ',', '.') ?></span></h2>
                                </div>[]
                                <?php
                                }
                                ?>
                                <div class="cart-btn">
                                    <button>Cập Nhật</button>
                                    <button>Thanh Toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
<?php include 'inc/footer.php';?>
