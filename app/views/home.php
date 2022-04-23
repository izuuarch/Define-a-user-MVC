<?php
$this->view("user/partials/header",$data);
$this->view("user/partials/navbar",$data);
?>
<div class="container-fluid">

        <div class="row">
        	<!-- left bar -->
        	<div class="col-md-3">
        		<div class="card col-lg-12">
      <div class="card-body">

          <ul>
            <li class="d-flex justify-content-between align-items-center">
         <div>
         <h4>Merlind Tapped you</h4>

       </div>

     </li>
             <li class="d-flex justify-content-between align-items-center">
          <div>

          <ul class="nav-justified"><li><p>Check it out</p></li></ul>
        </div>

      </li>
          </ul>

      </div>
  </div>
        	</div>
<!-- end of left bar -->

<!-- middle -->
        	<div class="col-md-6">
            <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
            echo '  <div style="width: 100%; height: 50px; background: white; color: white;" class="card bg-dark">
              <p class="text-center">'.$_SESSION['success'].'</p>
            </div>';
            unset($_SESSION['success']);
            }
            ?>
            <div class="row">
              <?php
    if ($data['getdefs']) {
      foreach($data['getdefs'] as $get){
    $id = $get->id;
    $defid = $get->defid;
    $username = $get->username;
    $defcategory = $get->defcategory;
    $defimage = $get->defimage;
    $firstreason = $get->firstreason;
    $secondreason = $get->secondreason;
    $thirdreason = $get->thirdreason;
    $fourthreason = $get->fourthreason;
    $fifthreason = $get->fifthreason;
    ?>
    <div class="col-md-6">
       <div class="card">
           <img class="card-img-top" src="dfupload/<?= $defimage ?>" alt="<?= $defid ?>" style="height: 250px;">
           <div class="card-body">
               <h4 class="card-title mb-3">Defined Status</h4>
               <div class="dcontainer">
               <ul class="deful">
                 <li><?= $firstreason ?></li>
                 <li><?= $secondreason ?></li>
                 <li><?= $thirdreason ?></li>
                 <li><?= $fourthreason ?></li>
                 <li><?= $fifthreason ?></li>
               </ul>
             </div>

                 <div class="col-lg-12">
      <div class="card bg-success">
        <div class="card-body text-center text-white">
          <h6>Defined By: <?= $username ?></h6>
        </div>
      </div>
    </div>
           </div>
       </div>
    </div>
    <?php
  }
    }else{
      ?>
      <div class="col-lg-12">
      <div class="card bg-danger">
        <div class="card-body text-center">
          <h4>No Definition Yet</h4>
        </div>
      </div>
    </div>
      <?php
    }
               ?>
<!-- <div class="col-md-6">
   <div class="card">
       <img class="card-img-top" src="dfupload/622e1bd28ecc23.93990584.png" alt="Card image cap">
       <div class="card-body">
           <h4 class="card-title mb-3">Definition Reasons</h4>
           <div class="dcontainer">
           <ul class="deful">
             <li>If you're not hurting you're not winning</li>
             <li>Swim with sharks</li>
             <li>Thinking outside the box</li>
             <li>Really threw me under the bus</li>
             <li>Let's not solutionize this</li>
             <li>That's mint</li>
           </ul>
         </div>
       </div>
   </div>
</div> -->
       <!-- <div class="col-md-6">
<div class="card">
 <img class="card-img-top" src="dfupload/622e1bd28ecc23.93990584.png" alt="Card image cap">
 <div class="card-body">
     <h4 class="card-title mb-3">Definition Reasons</h4>
     <div class="dcontainer">
     <ul class="deful">
       <li>If you're not hurting you're not winning</li>
       <li>Swim with sharks</li>
       <li>Thinking outside the box</li>
       <li>Really threw me under the bus</li>
       <li>Let's not solutionize this</li>
       <li>That's mint</li>
     </ul>
   </div>
 </div>
</div>
</div> -->
            </div>
        	</div>
        	<!-- end of middle bar -->


<!-- right bar -->
        	<div class="col-md-3">
<div class="card col-lg-12">
      <div class="card-body">

          <ul>
            <li class="d-flex justify-content-between align-items-center">
         <div>
         <h4>Merlind Tapped you</h4>

       </div>

     </li>
             <li class="d-flex justify-content-between align-items-center">
          <div>
        </div>

      </li>
          </ul>

      </div>
  </div>
        	</div>
        	<!-- end of right bar -->
        	</div>
        </div>
<?php
$this->view("user/partials/header",$data);
?>
