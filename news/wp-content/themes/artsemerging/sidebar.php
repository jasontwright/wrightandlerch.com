<!-- begin sidebar --><div id="side-content"><div id="menu1"><div id="menu"><a href="<?php echo get_settings('home'); ?>" class="sidebar-title"><?php bloginfo('name'); ?></a><ul><?php wp_list_pages('sort_column=menu_order&title_li=<b>' . __('pages:') . '</b>' ); ?> <li id="search">   <label for="s"><?php _e('Search:'); ?></label>	   <form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">	<div>		<input type="text" name="s" id="s" size="15" /><br />		<input type="submit" name="submit" value="<?php _e('Search'); ?>" />	</div>	</form> </li> <li id="archives"><?php _e('Archives:'); ?> 	<ul>	 <?php wp_get_archives('type=monthly'); ?> 	</ul> </li> <li id="calendar">	<?php get_calendar(); ?> </li> <li id="categories"><?php _e('Categories:'); ?>	<ul>	<?php wp_list_cats('sort_column=name'); ?>	</ul> </li> <li id="linkage"><?php _e('linkage:'); ?><ul><?php get_links_list(); ?></ul>	</li> <li id="meta"><?php _e('Meta:'); ?> 	<ul>		<li><?php wp_loginout(); ?></li>		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>		<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>		</ul> </li></ul><br /><span class="credit"><?php echo sprintf(__("Powered by <a href='http://wordpress.org' title='%s'><strong>WordPress</strong></a>"), __("Powered by WordPress, state-of-the-art semantic personal publishing platform")); ?><br /></span><span class="credit"><?php echo sprintf(__("and the <a href='http://saartsemerging.org/artsemerging-wordpress-theme/' title='%s'><strong>artsemerging</strong></a> theme"), __("the artsemerging wordpress theme")); ?><br /></span><span class="credit"><?php echo sprintf(__("by <a href='http://nathanielstern.com' title='%s'><strong>nathaniel stern</strong></a>"), __("nathaniel stern")); ?></span></div></div></div><!-- end sidebar -->