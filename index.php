<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
  	<div class="wrapper">

	    <div class="content">
	    		<?php get_template_part( 'loop', 'index' );	?>
	    </div> <!--/.content -->

	    <?php get_sidebar(); ?>

	</div><!-- /.wrapper -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>