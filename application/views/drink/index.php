<ul class="navList">
   <?php
 foreach ($navData as $nav)
{
     if ($nav['navPlace'] == 0)
 { ?>
       <li class="items"><a href="<?= $nav['navLinkUrl'] ?>"><?= $nav['navName'] ?></a></li>
     <?php }}
?>
</ul>

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
