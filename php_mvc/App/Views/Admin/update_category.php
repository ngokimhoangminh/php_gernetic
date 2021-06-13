<?php include 'inc/header.php';?>
<?php include 'inc/sliderbar.php';?>
<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
  		<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Danh Mục Sản Phẩm
                </header>
                <div class="panel-body">
                    <?php foreach ($categorybyid as $key => $update_category) 
                    {
                    ?>
                    <div class="position-center">
                        <form role="form" action="/Gernetic/php-mvc/public/edit_category/<?php echo $update_category['category_id']; ?>" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Danh Mục</label>
                                <input type="text" value="<?php echo $update_category['category_name'] ?>" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung danh mục</label>
                                <textarea style="resize:none" rows="5" class="form-control" id="ck_catUpdate" name="category_des">
                                <?php echo $update_category['category_des'] ?>
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-info" name="update_category_product">Cập nhật
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