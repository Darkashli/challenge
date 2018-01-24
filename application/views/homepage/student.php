<ul class="navList">

  <?php
 foreach ($navData as $nav) {
     if ($nav['navPlace'] == 0) {
         ?>
    <li class="items">
      <a href="<?= $nav['navLinkUrl'] ?>">
        <?= $nav['navName'] ?>
      </a>
    </li>
    <?php
     }
 }
?>

      <?php
 foreach ($navData as $nav) {
     if ($nav['navPlace'] == 1) {
         ?>
        <li class="items">
          <a href="<?= $nav['navLinkUrl'] ?>">
            <?= $nav['navName'] ?>
          </a>
        </li>
        <?php
     }
 }
?>

</ul>
</nav>

<h3>
  <?= $title4 ?>
</h3>
<p>You have been successfully logged in to your student webpage!</p>
<h4>
  <p>
    <?= $title5 ?>
  </p>
</h4>

<?php echo validation_errors(); ?>
<?php echo form_open('students/');  ?>

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="form-group">
      <label>studentnummer</label>
      <input type="text" class="form-control" name="studentnummer" placeholder="add your student number here">
    </div>

    <div class="button">
      <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
    </div>
  </div>
</div>

<?php echo form_close(); ?>