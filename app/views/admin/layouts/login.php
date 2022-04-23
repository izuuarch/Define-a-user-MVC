<?php
$this->view("admin/partials/header",$data);
$this->view("admin/partials/navbar",$data);
?>
<?php
// $password = "21995812";
// $hpassword= password_hash($password, PASSWORD_DEFAULT);
// echo $hpassword;
 ?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                <?php

                    if(isset($_SESSION['emailempty']) && $_SESSION['emailempty'] !='')
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['emailempty'].' </h2>';
                        unset($_SESSION['emailempty']);
                    }
                ?>
                <?php

                    if(isset($_SESSION['passwordempty']) && $_SESSION['passwordempty'] !='')
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['passwordempty'].' </h2>';
                        unset($_SESSION['passwordempty']);
                    }
                ?>
              </div>

                <form class="user" action="<?= BASEURL ?>/loginadmin" method="POST">

                    <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>

                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
<?php
$this->view("admin/partials/header",$data);
?>
