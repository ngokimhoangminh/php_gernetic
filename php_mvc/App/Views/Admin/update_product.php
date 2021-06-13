<?php include 'inc/header.php';?>
<?php include 'inc/sliderbar.php';?>
<?php
use App\Helpers\Session;
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <?php
                                foreach ($result_product as $key => $rs_product) 
                                {
                            ?>
                            <div class="position-center">
                                <form role="form" action="/Gernetic/php-mvc/public/edit_product/<?php echo $rs_product['product_id'] ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 kí tự" name="product_name" class="form-control" id="exampleInputEmail1" value="<?php echo $rs_product['product_name'] ?>" placeholder="Enter Product">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                        <select name="product_category" class="form-control input-sm m-bot15">
                                            <?php
                                                foreach ($result_category as $key => $cat) 
                                                {
                                                    if($cat['category_id']==$rs_product['category_id'])
                                                    {

                                            ?>
                                                         <option selected value="<?php echo $cat['category_id'] ?>"><?php echo $cat['category_name'] ?></option>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <option value="<?php echo $cat['category_id'] ?>"><?php echo $cat['category_name'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                <?php
                                            }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Thương hiệu</label>
                                        <select name="product_brand" class="form-control input-sm m-bot15">
                                            <?php
                                            foreach ($result_brand as $key => $bra) {
                                                if($bra['brand_id']==$rs_product['brand_id'])
                                                    {
                                            ?>
                                                <option selected value="<?php echo $bra['brand_id'] ?>"><?php echo $bra['brand_name'] ?></option>   
                                            <?php
                                            }else{
                                            ?>
                                            <option value="<?php echo $bra['brand_id'] ?>"><?php echo $bra['brand_name'] ?></option>   
                                            <?php
                                            }
                                            ?>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                        <textarea style="resize:none" rows="5" class="form-control"  id="ckCategory" placeholder="Mô tả sản phẩm" name="product_des" required=""><?php echo $rs_product['product_des'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                                        <input type="text" data-validation="number" data-validation-error-msg="Làm ơn nhập số tiền" name="product_price" value="<?php echo $rs_product['product_price']?>" class="form-control" id="exampleInputEmail1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $rs_product['product_image'] ?>" width="250" height="150">
                                        <input type="file" name="product_image">
                                    </div>
                                    <button type="submit" class="btn btn-info" name="update_product">Cập nhật</button>
                                </form>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </section>
            </div>         
        </div>
    </section>
<?php include 'inc/footer.php';?>