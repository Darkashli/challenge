<h3><?= $title ?></h3>
<h4>or <a href="<?php echo base_url(); ?>/homepages/login/">Login</a> here</h4><br>

<?php echo validation_errors('Failed registration!'); ?>
<?php echo form_open('homepages/register');  ?><br>


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
  <button type="submit" class="btn btn-primary btn-md button button4">Register</button>
</div>

<?php echo form_close(); ?>

