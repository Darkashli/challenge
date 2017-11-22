<h3><?= $title ?></h3>
<h4>or <a href="<?php echo base_url(); ?>/homepages/login/">Login</a> here</h4><br>

<?php echo validation_errors(); ?>
<?php echo form_open('homepages/register');  ?><br>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
     <div class="form-group">
 	  <label>Function</label>
 	    <select name="function" class="form-control">
 		  <option></option>
 		  <option>Admin</option>
 		  <option>Docent</option>
 		  <option>Student</option>
 	    </select>
    </div>

    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username"  placeholder="Your username">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email"  placeholder="Your email">
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Your password">
    </div>

    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control" name="password2" placeholder="Confirm your password">
    </div>

    <div class="button">
     <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
    </div><br>

  </div>
</div>

<?php echo form_close(); ?>

