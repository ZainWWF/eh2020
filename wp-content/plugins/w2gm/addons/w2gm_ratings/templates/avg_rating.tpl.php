<div class="w2gm-rating" <?php if ($meta_tags && $listing->avg_rating->ratings_count): ?>itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"<?php endif; ?>>
	<?php if ($meta_tags && $listing->avg_rating->ratings_count): ?>
	<?php if ($review_count = get_comments_number()): ?><meta itemprop="reviewCount" content="<?php echo $review_count; ?>" /><?php endif; ?>
	<meta itemprop="ratingValue" content="<?php echo $listing->avg_rating->avg_value; ?>" />
	<meta itemprop="ratingCount" content="<?php echo $listing->avg_rating->ratings_count; ?>" />
	<?php endif; ?>
	<?php if ($show_avg): ?>
	<span class="w2gm-rating-avgvalue">
		<span><?php echo $listing->avg_rating->avg_value; ?></span>
	</span>
	<?php endif; ?>
	<div class="w2gm-rating-stars <?php if ($active): ?>w2gm-rating-active<?php endif; ?>" data-listing="<?php echo $listing->post->ID; ?>" data-nonce="<?php echo wp_create_nonce('save_rating')?>">
		<label class="w2gm-rating-icon w2gm-fa <?php echo $listing->avg_rating->render_star(5); ?>" for="star-rating-5-<?php echo $listing->post->ID; ?>" data-rating="5"></label>
		<label class="w2gm-rating-icon w2gm-fa <?php echo $listing->avg_rating->render_star(4); ?>" for="star-rating-4-<?php echo $listing->post->ID; ?>" data-rating="4"></label>
		<label class="w2gm-rating-icon w2gm-fa <?php echo $listing->avg_rating->render_star(3); ?>" for="star-rating-3-<?php echo $listing->post->ID; ?>" data-rating="3"></label>
		<label class="w2gm-rating-icon w2gm-fa <?php echo $listing->avg_rating->render_star(2); ?>" for="star-rating-2-<?php echo $listing->post->ID; ?>" data-rating="2"></label>
		<label class="w2gm-rating-icon w2gm-fa <?php echo $listing->avg_rating->render_star(1); ?>" for="star-rating-1-<?php echo $listing->post->ID; ?>" data-rating="1"></label>
	</div>
</div>