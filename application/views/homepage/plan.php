<h3 class="title3">
  <?= $title6 ?>
</h3>

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
<br>

<?php foreach ($plan as $plans) : ?>

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="form-group">
      <label>
        <?php echo $plans['subject']; ?>
      </label>
      <div class="button">
        <a class="btn btn-primary btn-block" href="<?php echo site_url('/students/' . $plans['slug']); ?>">More info</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>