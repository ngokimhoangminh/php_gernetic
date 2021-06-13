<?php include 'inc/header.php';?>
<?php include 'inc/sliderbar.php';?>
<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
  		<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Thương Hiệu Sản Phẩm
                </header>
                <div class="panel-body">
                    <?php foreach ($brandbyid as $key => $update_brand) 
                    {
                    ?>
                    <div class="position-center">
                        <form role="form" action="/Gernetic/php-mvc/public/edit_brand/<?php echo $update_brand['brand_id']; ?>" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Danh Mục</label>
                                <input type="text" value="<?php echo $update_brand['brand_name'] ?>" name="brand_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung danh mục</label>
                                <textarea style="resize:none" rows="5" class="form-control" id="ck_catUpdate" name="brand_des">
                                <?php echo $update_brand['brand_des'] ?>
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-info" name="update_brand_product">Cập nhật
                            </button>
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