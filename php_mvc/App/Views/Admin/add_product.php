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
                            Thêm Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <?php
                                $message=Session::get('message');
                                if($message)
                                {
                                    echo '<span class="text-success">'.$message.'</span>';
                                    Session::set('message',null);
                                }
                            ?>
                            <div class="position-center">
                                <form role="form" action="/Gernetic/php-mvc/public/save_product" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 kí tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                        <select name="product_category" class="form-control input-sm m-bot15">
                                            <?php
                                                foreach ($result_category as $key => $cat) 
                                                {
                                            ?>
                                                <option value="<?php echo $cat['category_id'] ?>"><?php echo $cat['category_name'] ?></option>
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
                                                # code...
                                            ?>
                                                <option value="<?php echo $bra['brand_id'] ?>"><?php echo $bra['brand_name'] ?></option>   
                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                        <textarea style="resize:none" rows="5" class="form-control"  id="ckCategory" placeholder="Mô tả sản phẩm" name="product_des" required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá sản phẩm</label>
                                        <input type="text" data-validation="number" data-validation-error-msg="Làm ơn nhập số tiền" name="product_price" class="form-control" id="exampleInputEmail1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="file" name="product_image">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái</label>
                                        <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="1">Hiện</option>
                                            <option value="0">Ẩn</option>
                                            
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="save_product">Thêm</button>
                                </form>
                            </div>
                        </div>
                    </section>
            </div>         
        </div>
    </section>
<?php include 'inc/footer.php';?>