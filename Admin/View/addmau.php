<div class="row mt-5">
    <?php
    if ($_SESSION['chucvu'] == 'Admin' ||  $_SESSION['chucvu'] == "Quản Lý") {
    ?>
  <div class="card h-100 col-md-4 p-0 mt-5">
      <div class="bg-blue text-light rounded-10px text-center">
        <h4>Thêm Màu</h4>
      </div>
      <div class="card-body text-center">
        <form action="index.php?action=mau&act=mau_action" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <input type="text" autocomplete="off" required name="mau" class="form-control">
            <button type="submit" class="btn btn-primary p-3 rounded-10px bg-blue1">Thêm Màu Mới</button>
          </div>
        </form>
      </div>
    <?php
    }
    ?>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-4">
    <h1 class="text-center"><b>Danh Sách Màu</b></h1>
    <table class="table table-bordered table-striped table-hover">
      <thead class="table-success">
        <tr>
          <th>Mã Màu</th>
          <th>Tên Màu</th>
          <th>Xóa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $mau = new Mau();
        $result = $mau->getMau();
        while ($set = $result->fetch()) :
        ?>
          <tr>
            <td class="align-middle"><?php echo $set['Idmau'] ?></td>
            <td class="align-middle"><?php echo $set['mausac'] ?></td>
            <?php
            if ($_SESSION['chucvu'] == 'Admin' ||  $_SESSION['chucvu'] == "Quản Lý") {
            ?>
              <td class="align-middle"><a href="index.php?action=mau&act=delsize&id=<?php echo $set['Idmau'] ?>" onclick="showConfirmation(this)"  type="button" class="btn btn-danger link">Xóa</a></td>
              <?php
            }else{
              ?>
              <td class="align-middle"></td>

              <?php
            }
            ?>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</div>