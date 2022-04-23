<?php
$this->view("admin/partials/header",$data);
$this->view("admin/partials/navbar",$data);
if (!($_SESSION['defadminuser'])) {
         header('Location: ' . BASEURL . '/login');
       }
?>
<div class="container-fluid">
  <?php
  if (isset($_SESSION['delsuccess']) && $_SESSION['delsuccess'] !='') {
  echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
    <p class="text-center">'.$_SESSION['delsuccess'].'</p>
  </div>';
  unset($_SESSION['delsuccess']);
  }
  ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">All Defines
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Username</th>
            <th>category</th>
            <th>Image</th>
            <th> Delete </th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($data['alldefine']) {

          foreach($data['alldefine'] as $get){
              $id = $get->id;
              $username = $get->username;
              $category = $get->defcategory;
              $defineimage = $get->defimage;
              $firstreason = $get->firstreason;
              $secondreason = $get->secondreason;
              $thirdreason = $get->thirdreason;
              $fourthreason = $get->fourthreason;
              $fifthreason = $get->fifthreason;
              $defid = $get->defid;
              ?>
          <tr>
            <td><?= $username ?></td>
            <td><?= $category ?></td>
            <td><img src="dfupload/<?= $defineimage ?>" alt="" style="height: 100px; width: 100px;"></td>
            <td>
                <form action="<?= BASEURL ?>/defadminpanel" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $defid; ?>">
                  <input type="hidden" name="imgname" value="<?php echo $defineimage; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          <?php
          }
          }
          ?>

        </tbody>
      </table>

    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
<?php
$this->view("admin/partials/header",$data);
?>
