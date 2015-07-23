<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<aside id="categories-2" class="widget widget_categories">
		<ul>
			<li class="cat-item cat-item-3" id="store-link-in-nav">
				<a href="http://rsurf.theshop.jp" target="_blank">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/onlinestore.png" alt="store">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/surfboard">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/surfboard.png" alt="rsurf">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/r-kids-free-skate-school">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/rkidsskateschool.png" alt="rsurf">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/surfschool">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/surfschool.png" alt="rsurf">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/artwork">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/artwork.png" alt="rsurf">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/video">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/video.png" alt="rsurf">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/deestagram">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/deestagram.png" alt="rsurf">
				</a>
			</li>
			<li class="cat-item cat-item-3">
				<a href="/team">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/team.png" alt="rsurf">
				</a>
			</li>
			<li class="tag-cloud cat-item cat-item-3" style="margin-left: -1em;">
				<?php wp_tag_cloud('smallest=14 & largest=15 & unit=px'); ?>
			</li>
			<li class="cat-item cat-item-3">
				<?php
					$content1 = '<a href="http://rsurf.jp/wp-content/uploads/2014/02/hanco1.jpg">';
					$content2 = '<img class="alignnone" src="http://rsurf.jp/wp-content/uploads/2014/02/hanco1.jpg" alt="contact" style="margin-left: -10px; box-shadow: none;"/>';
					$content3 = '</a>';
					$content  = $content1 . $content2 . $content3;
					if ( function_exists('slb_activate') ) {
						$content = slb_activate($content1 . $content2 . $content3);
					}
					echo $content;
				?>
</li>
			<!-- <li class="cat-item cat-item-3">
				<a href="/stock">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/stock.png" alt="rsurf">
				</a>
			</li> -->
			<!-- <li class="cat-item cat-item-3">
				<a href="/category/news/">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/news.png" alt="rsurf">
				</a>
			</li> -->
			<!-- <li class="cat-item cat-item-3">
				<a href="/tag/kids">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/kidsitem.png" alt="rsurf">
				</a>
			</li> -->
			<!-- <li class="cat-item cat-item-3">
				<a href="/tag/skate">
					<img class="logoimg" src="/wp-content/themes/rsurf/image/labels/skate.png" alt="rsurf">
				</a>
			</li> -->
			<!-- li class="cat-item cat-item-3">
				<!-- ?php
					$atts = array (
								'pageid' => '221641151198023',
								'num' => '5',
								'update' => true,
								'show_description' => true,
								'show_avatar' => false,
								'avatar_size' => 'square',
								'link_target_blank' => true,
								'feed_title' => false,
								'like_button' => true,
								'like_button_position' => 'bottom');
					echo(fbf_short_code($atts));
				? -->
			</li -->
		</ul>
	</aside>
</div><!-- #secondary -->
