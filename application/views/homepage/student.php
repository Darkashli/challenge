<ul class="navList">
	 <?php
 foreach ($navData as $nav)
{
		 if ($nav['navPlace'] == 0)
 { ?>
			 <li class="items"><a href="<?= $nav['navLinkUrl'] ?>"><?= $nav['navName'] ?></a></li>
		 <?php }}
?>
</ul>
</nav>

<h3><?= $title4 ?></h3>
<p>You have been successfully logged in your student webpage!</p><br>

<?php echo validation_errors(); ?>
<?php echo form_open('homepages/student');  ?>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
	  <div class="form-group">
      <label>studentnummer</label>
      <input type="text" class="form-control" name="studentnummer" placeholder="voer maar hier jouw studentnummer in">
    </div>

	  <div class="button">
     <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
    </div>
	</div>
</div>

<?php echo form_close(); ?>
