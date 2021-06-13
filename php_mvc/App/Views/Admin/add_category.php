<?php include 'inc/header.php';?>
<?php include 'inc/sliderbar.php';?>
<?php
use App\Helpers\Session;
?>
<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
  		<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Danh Mục Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <?php
                                $message=Session::get('message');
                                if($message)
                                {
                                    echo '<span class="text-error">'.$message.'</span>';
                                    Session::put('message',null);
                                }
                            ?>
                            <div class="position-center">
                                <form role="form" action="/Gernetic/php-mvc/public/save_category" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Danh Mục</label>
                                        <input type="text" value="" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung danh mục</label>
                                        <textarea style="resize:none" rows="5" class="form-control" id="ckCategory" name="category_des"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select name="category_status" class="form-control input-sm m-bot15">
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                        
                                    </select>
                                </div>
                                    <button type="submit" class="btn btn-info" name="save_category">Thêm
                                    </button>
                                </form>
                            </div>
                        </div>
                    </section>

            </div>
   
        </div>
    </section>
<?php include 'inc/footer.php';?>