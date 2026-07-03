<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="screen-reader-text" for="blog-search"><?php esc_html_e( 'Search for:', 'credobpo' ); ?></label>
		<input type="search" id="blog-search" name="s" placeholder="<?php esc_attr_e( 'Search the blog…', 'credobpo' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
	</div>
	<button type="submit" class="btn btn-primary btn-block"><?php esc_html_e( 'Search', 'credobpo' ); ?></button>
</form>
