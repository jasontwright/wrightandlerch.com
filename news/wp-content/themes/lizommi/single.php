﻿<?php 
get_header();
?>

<div id="content">
<div id="colOne">

<!-- the loop -->


<?php if (have_posts()) :?>
<?php $postCount=0; ?>
<?php while (have_posts()) : the_post();?>
<?php $postCount++;?>

<div class="entry entry-<?php echo $postCount ;?>">

<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1> 

<span class="postedby">Posted by <?php the_author() ?></span> on <?php the_time('F jS, Y') ?> filed in <?php the_category(', ') ?> 



<p><?php the_content('Read the rest of this entry &raquo;'); ?></p>
		
		
</div>

<div class="commentsblock">
<?php comments_template(); ?>
</div>
	
<?php endwhile; ?>
		
<?php else : ?>

<h2>Not Found</h2>
<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>
<?php endif; ?>

<!-- end loop -->

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>