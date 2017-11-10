<h3><?= $title ?></h3>

<?php echo validation_errors(); ?>
<?php echo form_open('homepages/register');  ?>


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
    <input type="text" class="form-control" name="username"  placeholder="The Username">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="The Password">
</div>

<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="password" placeholder="The Password">
</div>


<div class="button">
  <button type="submit" class="btn btn-primary btn-md button button4">Register</button>
  <button type="submit" class="btn btn-danger btn-md">Login</button>
</div>

<?php echo form_close(); ?>

