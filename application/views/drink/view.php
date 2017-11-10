
<h3><?php echo $drink['Drinknaam']; ?></h3>
 <br>
<div class="button2">

<?php echo form_open('options/update'); ?>
<input type="submit" value="confirm" name="confirm" class="btn btn-primary pull-left">
<?php echo form_close(); ?>

<?php echo form_open('/options/'); ?>
  <input type="submit" value="back" class="btn btn-danger">
<?php echo form_close(); ?>
</div>
