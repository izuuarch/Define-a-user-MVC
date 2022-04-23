<nav class="m-r-nav-container card sticky-top">
	  <ul class="m-r-nav-list">

    <li class="m-r-nav-list-link">
      <a href="<?= BASEURL ?>">
        <i class="fas fa-home"></i>
      </a>
    </li>
		<li class="m-r-nav-list-link">
			<?php 
			if (isset($_SESSION['defadminuser'])) {
				?>
				<a href="<?= BASEURL ?>/logout">logout</a>
				<?php
			}
			 ?>
		</li>

</ul>
</nav>
