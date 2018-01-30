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
</ul>
</nav>

<h3>
  <?= $title3 ?>
</h3>
<h4>or
  <a class="nav-link badge badge-pill badge-primary" href="<?php echo base_url(); ?>/homepages/register/">register</a> here</h4>
<br>

<?php echo validation_errors(); ?>
<?php echo form_open('homepages/login');  ?>
<br>

<div class="row">
  <div class="col-md-4 col-md-offset-4">

    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username" placeholder="Your username">
    </div>


    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Your password">
    </div>


    <div class="button">
      <button type="submit" class="btn btn-primary btn-block btn-md">Login</button>
    </div>
    <br>

  </div>
</div>