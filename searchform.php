<?php
/**
 * The template part for display search form
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

?>

<div itemscope itemtype="http://schema.org/WebSite">
<meta itemprop="url" content="<?php echo esc_url( home_url( '/' ) ); ?>">

<form role="search" method="get" class="search-form clearfix" action="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
	
	<meta itemprop="target" content="<?php echo esc_url( home_url( '/' ) ); ?>?s={search_term}">
	<label>
		<input type="search" class="search-field" placeholder="Search for:" value="" name="s" itemprop="query-input" required>
	</label>

	<input type="submit" class="search-submit" value="Find">

</form>
</div>
