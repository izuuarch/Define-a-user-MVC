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

<!-- empty area  -->

      </div>
  </div>
        	</div>
<!-- end of left bar -->

<!-- middle -->
        	<div class="col-md-6">
		<div class="login-container-wrapper clearfix">
			<!-- <div class="logo"><i class="fas fa-pen"></i></div> -->
			<div class="welcome"><strong>Student Definition</strong></div>

			<form class="form-horizontal login-form" method="post" action="<?= BASEURL ?>/createdefine" enctype="multipart/form-data">
        <?php
        if (isset($_SESSION['fullnameerr']) && $_SESSION['fullnameerr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['fullnameerr'].'</p>
        </div>';
        unset($_SESSION['fullnameerr']);
        }
        ?>
				<div class="form-group relative">
					<input id="" autocomplete="off" class="form-control input-lg" type="text" placeholder="Your name" name="fullname" value="<?php if(isset($_SESSION['fullnamefixed']) && $_SESSION['fullnamefixed'] !='') {echo $_SESSION['fullnamefixed'];unset($_SESSION['fullnamefixed']);}?>">
				</div>
        <?php
        // if (isset($_SESSION['categoryerr']) && $_SESSION['categoryerr'] !='') {
        // echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
        //   <p class="text-center">'.$_SESSION['categoryerr'].'</p>
        // </div>';
        // unset($_SESSION['categoryerr']);
        // }
        ?>
<!--         <div class="form-group relative">
        <div class="select">
  <select name="dffcategory">
    <option selected="">select a define category</option>
    <option value="student">Student</option>
    <option value="lecturer">Lecturer</option>
  </select>
</div>
</div> -->
        <?php
        if (isset($_SESSION['selimgerr']) && $_SESSION['selimgerr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['selimgerr'].'</p>
        </div>';
        unset($_SESSION['selimgerr']);
        }
        ?>
        <?php
     if (isset($_SESSION['bigfileerr']) && $_SESSION['bigfileerr'] !='') {
      echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['bigfileerr'].'</p>
        </div>';
 unset($_SESSION['bigfileerr']);
     }
?>
<?php
if (isset($_SESSION['errupload']) && $_SESSION['errupload'] !='') {
echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
  <p class="text-center">'.$_SESSION['errupload'].'</p>
</div>';
unset($_SESSION['errupload']);
}
?>
        <div class="form-group relative">
          <input id="fle131" class="form-control input-lg" type="file" placeholder="" name="defimage" value="choose an image" style="display: none;">
          <label class="btn btn-block" style="background-color: #2EE59D;" for="fle131">Choose an image</label>
        </div>

        <!-- <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">color is cool</p>
        </div> -->
        <!--five reasons area -->
        <?php
        if (isset($_SESSION['firsterr']) && $_SESSION['firsterr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['firsterr'].'</p>
        </div>';
        unset($_SESSION['firsterr']);
        }
        ?>
        <div class="form-group relative">
          <label for="">First reason<span class="fas fa-pen"></span></label>
          <input id="" autocomplete="off" class="form-control input-lg" type="text" placeholder="First Reason" name="freason" value="<?php if(isset($_SESSION['freasonfixed']) && $_SESSION['freasonfixed'] !='') {echo $_SESSION['freasonfixed'];unset($_SESSION['freasonfixed']);}?>">
        </div>
        <?php
        if (isset($_SESSION['seconderr']) && $_SESSION['seconderr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['seconderr'].'</p>
        </div>';
        unset($_SESSION['seconderr']);
        }
        ?>
        <div class="form-group relative">
          <label for="">Second reason<span class="fas fa-pen"></span></label>
          <input id="" autocomplete="off" class="form-control input-lg" type="text" placeholder="Second Reason" name="sreason" value="<?php if(isset($_SESSION['sreasonfixed']) && $_SESSION['sreasonfixed'] !='') {echo $_SESSION['sreasonfixed'];unset($_SESSION['sreasonfixed']);}?>">
        </div>
        <?php
        if (isset($_SESSION['thirderr']) && $_SESSION['thirderr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['thirderr'].'</p>
        </div>';
        unset($_SESSION['thirderr']);
        }
        ?>
        <div class="form-group relative">
          <label for="">Third Reason<span class="fas fa-pen"></span></label>
          <input id="" autocomplete="off" class="form-control input-lg" type="text" placeholder="Third Reason" name="treason" value="<?php if(isset($_SESSION['treasonfixed']) && $_SESSION['treasonfixed'] !='') {echo $_SESSION['treasonfixed'];unset($_SESSION['treasonfixed']);}?>">
        </div>
        <?php
        if (isset($_SESSION['fourtherr']) && $_SESSION['fourtherr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['fourtherr'].'</p>
        </div>';
        unset($_SESSION['fourtherr']);
        }
        ?>
        <div class="form-group relative">
          <label for="">Fourth Reason<span class="fas fa-pen"></span></label>
          <input id="" autocomplete="off" class="form-control input-lg" type="text" placeholder="Fourth Reason" name="fhreason" value="<?php if(isset($_SESSION['fhreasonfixed']) && $_SESSION['fhreasonfixed'] !='') {echo $_SESSION['fhreasonfixed'];unset($_SESSION['fhreasonfixed']);}?>">
        </div>
        <?php
        if (isset($_SESSION['fiftherr']) && $_SESSION['fiftherr'] !='') {
        echo '  <div style="width: 100%; height: 50px; background: white; color: red;">
          <p class="text-center">'.$_SESSION['fiftherr'].'</p>
        </div>';
        unset($_SESSION['fiftherr']);
        }
        ?>
        <div class="form-group relative">
          <label for="">Fifth Reason<span class="fas fa-pen"></span></label>
          <input id="" autocomplete="off" class="form-control input-lg" type="text" placeholder="Fifth Reason" name="ffhreason" value="<?php if(isset($_SESSION['ffhreasonfixed']) && $_SESSION['ffhreasonfixed'] !='') {echo $_SESSION['ffhreasonfixed'];unset($_SESSION['ffhreasonfixed']);}?>">
        </div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-lg btn-block" name="dfsubmit" style="background-color: #2EE59D;">Submit</button>
			  </div>
			</form>

		</div>
        	</div>
        	<!-- end of middle bar -->


<!-- right bar -->
        	<div class="col-md-3">
<div class="card col-lg-12">
      <div class="card-body">

  <!-- empty area -->

      </div>
  </div>
        	</div>
        	<!-- end of right bar -->
        	</div>
        </div>
<?php
$this->view("user/partials/header",$data);
?>
