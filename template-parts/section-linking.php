<?php 
global $naturalbeauty_options;
$title = $naturalbeauty_options['sections-linking-title'];
$content = $naturalbeauty_options['sections-linking-content'];
$slides = $naturalbeauty_options['sections-linking-slides'];
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_linking', $page_details ); 
?>
<section id="section-linking">
	<div class="content-wrap">
		<div class="container">
			<?php do_action( 'action_before_linking', $page_details ); ?>
			<?php if ($title) : ?>				
				<div class="title-wrapper">
					<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
				</div>
			<?php endif; ?>
			<?php if ($content) : ?>				
				<div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
			<?php endif; ?>
			<div class="slides">
				<?php if (sizeof($slides) > 1) : ?>
					<div class="row">
						<?php foreach ($slides as $slide) : ?>
							<div class="col-md-4">
								<div class="wrapper">
									<?php if ($slide['attachment_id']) ?>									
									<img class="img-responsive img-fluid img-linking" src="<?php echo aq_resize(wp_get_attachment_url($slide['attachment_id']), 350, 350, true); ?>" alt="<?php echo $slide["title"] ?>">
									<?php echo do_shortcode( $slide["link_title"] ); ?>
								</div>
							</div>
						<?php endforeach;?>
					</div>
				<?php endif; ?>
			</div>
			<?php do_action( 'action_after_linking', $page_details ); ?>
		</div>	
	</div>
</section>
<?php do_action( 'action_below_linking', $page_details  ); ?>