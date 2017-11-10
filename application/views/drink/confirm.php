<h3><?= $title; ?></h3>

<?php echo validation_errors(); ?>
<?php echo form_open('options/update'); ?>
<input type="hidden" name="id" value="<?php echo $orders['id']; ?>">

 <div class="form-group">
    <label>Your choosen drink</label>
    <input type="button" class="btn btn-success" name="confirm" value="<?php echo $orders['wordgehaald']; ?>">
  </div>
