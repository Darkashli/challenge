<h3><?= $title ?></h3>
  <?php foreach ($drink as $drinks) : ?> 

 <div class="row">
 	<div class="col-md-4 col-md-offset-4">
	    <div class="form-group">
		      <label><?php echo $drinks['Drinknaam']; ?></label>
		      <div class="button">
                <a class="btn btn-primary btn-block" href="<?php echo site_url('/options/'.$drinks['slug']); ?>">options</a>
              </div>
        </div>
    </div>
   </div>
  <?php endforeach; ?>

