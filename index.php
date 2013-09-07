<?php $title = "Wright &amp; Lerch: Attorneys at Law"; ?>
<?php $description = "Wright &amp; Lerch is committed to improving your business performance by designing an effective collection
strategy tailored to meet your specific needs. Our ability to collect accounts quickly and to achieve performance ratios most
traditional law firms cannot match is a result of our ability to manage a large volume of cases without compromising the personal
attention vital to successful recovery."; ?>
<?php $keywords = "Wright, Lerch, Wright and Lerch, Wright &amp; Lerch, collection, indiana, fort wayne, ft. wayne, law firm"; ?>
<?php $home = "active"; ?>

<?php @ require_once ("header.php"); ?>

<div id="main-body">	<!-- Main Body -->

<div id="content">
	<h2 class="logo">Wright &amp; Lerch</h2>

	<p>Wright &amp; Lerch is committed to improving your business performance by designing an effective collection strategy tailored
	to meet your specific needs. Our ability to collect accounts quickly and to achieve performance ratios most traditional
	law firms cannot match is a result of our ability to manage a large volume of cases without compromising the personal
	attention vital to successful recovery.</p>

	<img src="/img/office_crop.gif" alt="Wright &amp; Lerch Office" />

	<p>When every dime counts, Wright &amp; Lerch is your collection attorney in Indiana.</p>

</div>	<!-- End content -->

</div>	<!-- End main-body -->

<div id="sidebar">

	<h3>Experience Counts</h3>
	<p>With over thirty years of collection experience, Wright &amp; Lerch is proficient in representing a diverse group of
	clients in Indiana - from locally-owned businesses to large, well-known financial institutions.<br />
	<a href="/firm/" title="Learn more about our firm and our experience">Read More</a></p>

	<h3>Recent News</h3>

		<?php
		$how_many=5; //How many posts do you want to show
		require_once("./news/wp-config.php"); // Change this for your path to wp-config.php file?>
			<ul>
				<?
				$news=$wpdb->get_results("SELECT `ID`,`post_title`, 'post_date' FROM $wpdb->posts
				WHERE `post_status`= \"publish\" ORDER BY ID DESC LIMIT $how_many");
				foreach($news as $np){
				printf ("<li><a href=\"/news/index.php?p=%s\">%s</a></li>", $np->ID,$np->post_title);
				}?>
			</ul>
</div>

<?php @ require_once ("footer.php"); ?>

</div>	<!-- End #wrap -->

</body>

</html>