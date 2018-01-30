<ul class="navbar-nav">
  <?php
 foreach ($navData as $nav) {
     if ($nav['navPlace'] == 0) {
         ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= $nav['navLinkUrl'] ?>">
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
        <li class="nav-item">
          <a class="nav-link" href="<?= $nav['navLinkUrl'] ?>">
            <?= $nav['navName'] ?>
          </a>
        </li>
        <?php
     }
 }
?>
</ul>

<h3>
  <?php echo $plan['subject']; ?>
</h3>
<br>
<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec leo leo, vulputate quis sem quis, maximus porttitor libero.
  Maecenas ac mattis leo. Nam luctus leo quis libero varius, ac scelerisque neque sodales. Proin est lorem, condimentum nec
  sollicitudin eu, efficitur ac ligula. Mauris sapien nulla, ornare eget egestas at, tempor quis nisi. Suspendisse malesuada
  tortor sem, sed accumsan ante volutpat a. Ut mollis tempus efficitur. Nam ut eleifend mi.</p>

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="button">
      <?php echo form_open('students/plan'); ?>
      <input type="submit" value="Back" class="btn btn-danger btn-block btn-md">
      <?php echo form_close(); ?>
    </div>
  </div>
</div>