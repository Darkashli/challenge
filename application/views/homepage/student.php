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
</nav>

<h3><?= $title4 ?></h3>
<p>You have been successfully logged in your student webpage!</p>