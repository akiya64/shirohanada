<?php
/**
 * The template part for displaing footer
 * Footer contents & inline JavaScript for sidebar show-hide
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */
?>

<footer class="site-footer <?php if ( is_front_page() ) { echo '-front'; } ?>">
<p class="copyright _inline">(c) <?php echo intval( get_first_post_year() ); ?> <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
	<p class="poweredby _inline">Powered by <a href="http://wordpress.org/"><i class="icon icon-wordpress"></i>WordPress</a>, Theme <a href="https://github.com/akiya64/shirohanada"><i class="icon icon-github"></i>shirohanada</a></p>
</footer>

<?php if ( is_front_page() ) : ?>
	</div><!--End DropDownPart-->

</div><!--End Top Flex Container-->
<?php else : ?>

<script type="text/javascript">

//Show and Hide Menu
var hideMenuBtn = document.getElementById('hide-menu-button');
var showMenuBtn = document.getElementById('menu-button');
var sideBar = document.getElementById('side-bar');

function showMenu(){
	sideBar.classList.add('on-top');
	hideMenuBtn.classList.add('show');
	showMenuBtn.classList.add('hide');
	hideMenuBtn.addEventListener('click',hideMenu);
	document.querySelector('div .article-area').addEventListener('click',hideMenu);
}

function hideMenu(){
	hideMenuBtn.classList.remove('show');
	showMenuBtn.classList.remove('hide');
	showMenuBtn.classList.add('show');
	sideBar.classList.remove('on-top');
}

showMenuBtn.href= '#top'
showMenuBtn.addEventListener('click',showMenu);

</script>

<?php endif ?>

<?php wp_footer(); ?>

</body>
</html>
