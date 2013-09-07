<?php $description = "Wright &amp; Lerch contact information: 2001 Reed Rd., Fort Wayne, IN, 46815 (260) 423-6655"; ?>
<?php $keywords = "Wright, Lerch, Wright and Lerch, Wright &amp; Lerch, collection, indiana, fort wayne, ft. wayne, law firm"; ?>
<?php $title = "Wright &amp; Lerch: Contact Us"; ?>
<?php $contact = "active"; ?><?php @ require_once ("../header.php"); ?><div id="main-body">	<!-- Main Body --><div id="content">		
	<h2 class="logo">Contact Us</h2>
	<p>Wright &amp; Lerch<br />
	2001 Reed Road<br />
	Ft. Wayne, IN 46815<br />
	(260) 423-6655 - Phone<br />
	(260) 422-0882 - Fax
	</p>
	
	<p>Please complete the following information and someone from our office will contact you.</p>
		
	<form method="POST" action="contact.php">
		
		<p>Email:*<br />
		<input type="text" name="EmailFrom"></p>		<p>Name:<br />
		<input type="text" name="Name"></p>		<p>Telephone:<br />
		<input type="text" name="Telephone"></p>
		
		<p>Comments:<br />
		<textarea cols="40" rows="6" name="Comments"></textarea></p>
		
		<p><input type="submit" name="submit" value="Submit"><br>
		<!-- The contact form has been disabled due to spam. We are implementing a fix for this and should be back to normal very soon. Thank you for your patience.</p> -->
	</form></div>	<!-- End #content --></div>	<!-- End #main-body --><div id="sidebar">
	<h3>Maps</h3>
	<p>
	<a class="map" href="http://maps.google.com/maps?q=2001+reed+rd.,+ft.+wayne,+in&amp;spn=0.032753,0.062622&amp;hl=en" title="Google Maps">
		<img src="../img/google_maps.gif" alt="Google Maps" width="150" height="55" /></a><br />
	<a class="map" href="http://us.rd.yahoo.com/maps/extmap;_ylt=AqEQ0s98hvVu1dp5.uX5HyxkDLMF/*-http://maps.yahoo.com/maps_result?addr=2001+Reed+Rd&amp;csz=Fort+Wayne%2C+IN+46815-7311&amp;state=IN&amp;uzip=46815&amp;ds=n&amp;name=&amp;desc=&amp;lat=41.095254&amp;lon=-85.07948&amp;mlt=41.095254&amp;mln=-85.07948&amp;zoomin=yes&amp;BFKey=&amp;mag=2" title="Yahoo! Maps">
		<img src="../img/yahoo_maps.gif" alt="Yahoo! Maps" /></a><br />
	<a class="map" href="http://www.mapquest.com/maps/map.adp?country=US&amp;addtohistory=&amp;formtype=address&amp;searchtype=address&amp;cat=&amp;address=2001%20Reed%20Rd&amp;city=Fort%20Wayne&amp;state=IN&amp;zipcode=46815%2d7311" title="MapQuest">
		<img src="../img/mapquest.gif" alt="MapQuest" /></a><br />
	</p>
		
</div><?php @ require_once ("../footer.php"); ?></div>	
<!-- End #wrap --></body></html>