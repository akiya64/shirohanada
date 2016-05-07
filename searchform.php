<?php
/**
 * The template part for display search form
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */
?>

<form role="search" method="get" class="search-form clearfix" action="<?php echo esc_url( home_url( '/' ) ); ?>">

       <label>
                <input type="search" class="search-field" placeholder="Search for:" value="" name="s" />
        </label>
        <input type="submit" class="search-submit" value="Find" />
</form>
