<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="blog">
     <?php 
        global $wp_query;
        $pageID = $wp_query->queried_object_id;
     ?>
     <?php $smallHero = get_field('hero_image', $pageID) ?>
    <div class="smallHero" style="background-image: url('<?php echo $smallHero['url'] ?>')">
        <div class="heroText">
            <strike>
            <h2><?php the_field('full_title', $pageID)?></h2>
            </strike>
        </div>
    </div>
  <div class="container">
    <div class="content">
    	<?php 
    		if( have_posts() ) {
    			while( have_posts() ) {
    				the_post();
    			?>
    				<article class="blog-post">
    					<p class="postDate"><?php the_time('F j, Y'); ?></p>
	    				<h4><?php the_title(); ?></h4>
	    				<p class="postExcerpt"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
	    				<button><h4><a href="<?php the_permalink(); ?> ">Read More <i class="fa fa-long-arrow-right"></i></a></h4></button>
    				</article>
    			<?php 
    			}
    		}
    	 ?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>