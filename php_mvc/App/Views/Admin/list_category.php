<?php include 'inc/header.php';?>
<?php include 'inc/sliderbar.php';?>
<?php
use App\Helpers\Session;
?>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          Danh Mục Sản Phẩm
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
                <th style="width:20px;">
                  <label class="i-checks m-b-none">
                    <input type="checkbox"><i></i>
                  </label>
                </th>
                <th>Tên danh mục</th>
                <th>Trạng Thái</th>
                <th>Mô tả</th>
                <th style="width:30px;"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($category as $key => $cat) {
              ?>
              <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td><?php echo $cat['category_name'] ?></td>
                <td><span class="text-ellipsis">
                  <?php
                    if($cat['category_status']==1)
                    {
                  ?>
                    <a href="/Gernetic/php-mvc/public/unactive_category/<?php echo $cat['category_id'] ?>"><i class="fa fa-thumbs-up"></i>Hiển Thị</a>
                  <?php
                  }else
                  {
                  ?>
                  <a href="/Gernetic/php-mvc/public/active_category/<?php echo $cat['category_id'] ?>"><i class="fa fa-thumbs-down"></i> Ẩn</a>
                  <?php
                  }
                  ?>
                </span></td>
                <td><?php echo $cat['category_des'] ?><span class="text-ellipsis"></span></td>
                <td>
                  <a href="/Gernetic/php-mvc/public/update_category/<?php echo $cat['category_id']; ?>" class="active styling-edit" ui-toggle-class><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a onclick="return confirm('Are you sure to delete?')" href="/Gernetic/php-mvc/public/delete_category/<?php echo $cat['category_id'];?>" class="active styling-edit" ui-toggle-class>
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
