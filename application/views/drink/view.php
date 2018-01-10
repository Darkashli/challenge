<div class="row">
  <div class="col-md-4 col-md-offset-2">

    <h3><?php echo $drink['Drinknaam']; ?></h3>
     <br>
    <div class="button">

    <?php echo form_open('options/update'); ?>
    <input type="submit" value="confirm" name="id" class="btn btn-primary btn-block">
    <?php echo form_close(); ?>

    <?php echo form_open('options/'); ?>
      <input type="submit" value="Back" class="btn btn-danger btn-block">
    <?php echo form_close(); ?>
    </div>
   </div>
 </div>
