<?php
/**
 * The template part for displaing footer
 * Footer contents & inline JavaScript for sidebar show-hide
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

if ( ! is_front_page() ) :

	get_sidebar(); ?>

</div><!--end main contents-->

<footer class="site-footer">

	<p class="copyright">
		&copy; <?php echo intval( get_first_post_year() ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> / Powered by <a href="http://wordpress.org/"><i class="icon icon-wordpress"></i>WordPress</a>
	</p>
</footer>

<script type="text/javascript">

//Show and Hide Menu
var hideMenuBtn = document.getElementById('hide-menu-button');
var showMenuBtn = document.getElementById('menu-button');
var sideBar = document.getElementById('side-bar');

function showMenu(){
	sideBar.classList.add('-ontop');
	hideMenuBtn.classList.add('-show');
	showMenuBtn.classList.add('-hide');
	hideMenuBtn.addEventListener('click',hideMenu);
	document.querySelector('div .article-area').addEventListener('click',hideMenu);
}

function hideMenu(){
	hideMenuBtn.classList.remove('-show');
	showMenuBtn.classList.remove('-hide');
	showMenuBtn.classList.add('-show');
	sideBar.classList.remove('-ontop');
}

if ( window.matchMedia('(max-width:600px)').matches){
	showMenuBtn.href= '#top'
}

showMenuBtn.addEventListener('click',showMenu);

</script>

<?php endif ?>

<?php wp_footer(); ?>

</body>
</html>
