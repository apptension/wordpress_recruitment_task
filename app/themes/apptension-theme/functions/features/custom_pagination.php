<?php

function custom_pagination() {
	global $wp_query;
	if ($wp_query->max_num_pages >= 2) {
		$big = 999999999;
		$pagination_args = array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'show_all'     => False,
			'end_size'     => 1,
			'mid_size'     => 2,
			'prev_next'    => True,
			'prev_text'    => '<span title="Previous page" class="blog__pagination-icon blog__pagination-icon--previous"></span>',
			'next_text'    => '<span title="Next page" class="blog__pagination-icon blog__pagination-icon--next"></span>',
			'type'         => 'plain',
			'add_args'     => False,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		);
		$currentPage = get_query_var('paged');
		$pagination_args = apply_filters( 'pretty_pagination_params', $pagination_args );
		$before_pagination = apply_filters('pretty_before_pagination','<div class="blog__pagination">');
		$first_link = $currentPage == 0 ? '' : '<a title="First page" class="blog__pagination-icon blog__pagination-icon--first" href="'. get_pagenum_link( 1 ) .'"></a>';
		$last_link = $currentPage == $wp_query->max_num_pages ? '' : '<a title="Last page" class="blog__pagination-icon blog__pagination-icon--last" href="'. get_pagenum_link( $wp_query->max_num_pages ) .'"></a>';
		$after_pagination = apply_filters('pretty_after_pagination','</div>');
		echo $before_pagination . $first_link . paginate_links( $pagination_args ) . $last_link . $after_pagination;
	}
}
