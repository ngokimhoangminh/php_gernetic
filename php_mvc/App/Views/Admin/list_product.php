<?php include 'inc/header.php';?>
<?php include 'inc/sliderbar.php';?>
<?php
use App\Helpers\Session;
?>
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          DANH SÁCH SẢN PHẨM
        </div>
        <div class="row w3-res-tb">
          <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
              <option value="0">Bulk action</option>
              <option value="1">Delete selected</option>
              <option value="2">Bulk edit</option>
              <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
          </div>
          <div class="col-sm-4">
          </div>
          <div class="col-sm-3">
            <div class="input-group">
              <input type="text" class="input-sm form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <?php
            $message=Session::get('message');
            if($message)
            {
              echo '<span class="text-success">'.$message.'</span>';
              Session::set('message',null);
            }
          ?>
          <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Thương hiệu</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th style="width:30px;"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($product as $key => $rs_product) {
              ?>
              <tr>
                <td><?php echo $rs_product['product_name'] ?></td>
                <td><?php echo $rs_product['category_name'] ?></td>
                <td><?php echo $rs_product['brand_name'] ?></td>
                <td><?php echo $rs_product['product_des'] ?></td>
                <td><?php echo number_format($rs_product['product_price'], 0, ',', '.') ?></td>
                <td><img src="/Gernetic/php-mvc/public/assets/backend/uploads/<?php echo $rs_product['product_image'] ?>" height="100" width="120"></td>
                <td><span class="text-ellipsis">
                 <?php
                    if($rs_product['product_status']==1){
                  ?>
                      <a href="/Gernetic/php-mvc/public/unactive_product/<?php echo $rs_product['product_id'] ?>"><i class="fa fa-thumbs-up"></i> Hiển Thị</a>
                    <?php
                    }else
                    {
                    ?>
                     <a href="/Gernetic/php-mvc/public/active_product/<?php echo $rs_product['product_id'] ?>"><i class="fa fa-thumbs-down"></i> Ẩn</a>
                    <?php
                    }
                   ?>
                </span></td>
                <td>
                  <a href="/Gernetic/php-mvc/public/update_product/<?php echo $rs_product['product_id'] ?>" class="active styling-edit" ui-toggle-class><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a onclick="return confirm('Are you sure to delete?')" href="/Gernetic/php-mvc/public/delete_product/<?php echo $rs_product['product_id'] ?>" class="active styling-edit" ui-toggle-class>
                    <i class="fa fa-times text-danger text"></i>
                  </a>
                </td>
              </tr>
              <?php
            }
              ?>
            </tbody>
          </table>
        </div>
        <footer class="panel-footer">
          <div class="row">
            
            <div class="col-sm-5 text-center">
              <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">                
              <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </section>
<?php include 'inc/footer.php';?>