<?php get_header(); ?>

<div id="content" class="clearfix row-fluid">
	<?php do_action('cp_main_before'); ?>	
	<div id="main" class="span12 clearfix" role="main">
		<?php do_action('cp_loop_before'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">	
			<header>
				<a href="<?php the_permalink(); ?>">#<?php the_ID(); ?></a>
				<h1><?php the_title();	?></h1>
				<?php echo get_the_term_list( get_the_ID(), 'report_cat', 'Категории: ', ', ', '' ); ?> 
				<hr/>
			</header>

			<div class="entry-content">
			<?php do_action('cp_entry_content_before'); ?>
				<div class="entry-content-inner">
				<?php
					the_content();
				?>
				</div>
			<?php do_action('cp_entry_content_after'); ?>
			<hr/>
			</div>
            <footer>
                <?php do_action('cp_entry_footer_before'); ?>
                <?php do_action('cp_post_before_comments'); ?>
                <?php comments_template('', true); ?>
                <?php do_action('cp_post_after_comments'); ?>
                <?php do_action('cp_entry_footer_after'); ?>
            </footer>
		</article>
		<?php do_action('cp_post_after'); ?>
        <?php endwhile; /* End loop */ ?>
	</div><!-- /#main -->
	<?php do_action('cp_main_after'); ?>
</div><!-- /#content -->
<?php do_action('cp_content_after'); ?>

<?php get_footer(); ?>