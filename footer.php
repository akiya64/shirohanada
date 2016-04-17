<?php if (is_front_page()){
			$footer_class = "top-page-footer";
		}else{
			$footer_class = "site-footer";
		}
?>

<footer class="<?php echo $footer_class; ?>">
	<p>(c) <?php echo get_first_post_year(); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ; ?></a></p>
	<p>Powered by <a href="http://wordpress.org/"><i class="icon icon-wordpress"></i>WordPress</a>, </p>
	<p>Hosting by <a href="http://www.sakura.ad.jp/">さくらインターネット</a></p>
</footer>

<?php if (is_front_page()): ?>
	</div><!--End DropDownPart--!>
<?php else: ?>

<script type="text/javascript">

//Show and Hide Menu
var hideMenuBtn = document.getElementById('hide-menu-button');
var showMenuBtn = document.getElementById('menu-button');
var sideBar = document.getElementById('side-menu');

function showMenu(){
	sideBar.classList.add('on-top');
	hideMenuBtn.classList.add('show');
	showMenuBtn.classList.add('hide');
	hideMenuBtn.addEventListener('click',hideMenu);
	document.querySelector('div .articles').addEventListener('click',hideMenu);
}

function hideMenu(){
	hideMenuBtn.classList.remove('show');
	showMenuBtn.classList.remove('hide');
	showMenuBtn.classList.add('show');
	sideBar.classList.remove('on-top');
}

showMenuBtn.addEventListener('click',showMenu);

</script>

<?php endif ?>

</div><!--End contents container-->

<?php wp_footer(); ?>

</body>
</html>
