<h3><?= $title ?></h3>
<?php foreach ($drink as $drinks) : ?> 
	<div class="form-group">
		
			<ul class="menu">
		      <li class="drinks"><?php echo $drinks['Drinknaam']; ?><br>
              <a class="btn-md" href="<?php echo site_url('/options/'.$drinks['slug']); ?>">options</a></li>
	       </ul>
	    
    </div>
  <?php endforeach; ?>
