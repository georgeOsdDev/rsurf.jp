<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="widget-area" role="complementary">
	<aside id="categories-2" class="widget widget_categories"><h3 class="widget-title">XXX</h3>
		<ul id="sidebar_links">
			<li class="sidebar_links_item cat-item cat-item-3">
				<a href="/r-kids-free-skate-school">
					R KIDS FREE SKATE SCHOOL
					<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/sidebar/kidsskateschool.png" alt="rsurf"> -->
				</a>
			</li>
			<li class="sidebar_links_item cat-item cat-item-3">
				<a href="/skateboard">
					SKATE
					<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/sidebar/skate.png" alt="rsurf"> -->
				</a>
			</li>
			<li class="sidebar_links_item cat-item cat-item-3">
				<a href="/surfboard">
					SURF
					<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/sidebar/surf.png" alt="rsurf"> -->
				</a>
			</li>
			<li class="sidebar_links_item cat-item cat-item-3">
				<a href="/video">
					VIDEO
					<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/sidebar/video.png" alt="rsurf"> -->
				</a>
			</li>
			<li class="sidebar_links_item cat-item cat-item-3">
				<a href="/gallery">
					GALLERY
					<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/sidebar/gallery.png" alt="rsurf"> -->
				</a>
			</li>
		</ul>
	</aside>

</div><!-- #secondary -->

