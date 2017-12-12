<ul class="navList">
	 <?php
 foreach ($navData as $nav)
{
		 if ($nav['navPlace'] == 1)
 { ?>
			 <li class="items"><a href="<?= $nav['navLinkUrl'] ?>"><?= $nav['navName'] ?></a></li>
		 <?php }}
?>
</ul>
</nav>

<div data-role="contact" id="pageone">

	<h3><?= $title2 ?></h3>
    <p>For more information you can call us or <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">send an email</a></p>
    <br>

  <div data-role="panel" id="alaaPage">
    <h4>Alaa Darkashli</h4>
    <p>Phone number: 0031-800-0000</p>
    <p>Address: 121 N. LaSalle Street
    <br>Chicago, Illinois 60602 USA</p>
    <p>Email: alaa_darkashli@hotmail.com</p>
  </div>
  <br>

  <div data-role="panel" id="jackyPage">
    <h4>Jacky</h4>
    <p>Phone number: 212-330-5200</p>
    <p>Address: 350 Fifth Avenue
    <br>New York, NY 10118-3299 USA</p>
    <p>Email: jacky_vogel@gmail.com</p>
  </div>

</div>
