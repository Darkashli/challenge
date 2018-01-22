<div class="row">
  <div class="col-md-3 col-md-offset-2">

    <h3>
      <?php echo $plan['subject']; ?>
    </h3>
    <br>
    <div class="button">

      <?php echo form_open('students/index'); ?>
      <input type="submit" value="Back" class="btn btn-danger btn-block">
      <?php echo form_close(); ?>
    </div>
  </div>
</div>