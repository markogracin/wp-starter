<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php the_post_thumbnail() ?>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <p class="meta">On <?php the_date(); ?> by <?php the_author(); ?></p>
            <a href="<?php the_permalink(); ?>" <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
                Read more...
            </a>

            <?php wp_link_pages(array(
                            'before' => '<div class="page-link-next-prev">',
                            'after' => '</div>',
                            'next_or_number' => 'next',
                            'previouspagelink' => __('Previous', 'wordpress-starter-theme'),
                            'nextpagelink' => __('Next', 'wordpress-starter-theme'))
            ); ?>

        <?php endwhile; ?>

        <?php echo paginate_links(); ?>

    <?php else : ?>
       nothing to show
    <?php endif; ?>
</main>

<?php get_footer(); ?>
