<?php 
	/* Template Name: Hotel Page  */ 
	get_header();

	$cover_title              = get_field('hotel_cover_title');

	$aboutus_title            = get_field('hotel_about_us_title');
	$aboutus_desc             = get_field('hotel_about_us_description');

	$room_title = get_field('room_section_title');
	$images_row_1 = array();
	for ($i=1; $i <=4 ; $i++) { 
		$images_row_1[] = get_field("hotel_room_" . $i ); 
	}
	$images_row_2 = array();
	for ($i=5; $i <=8 ; $i++) { 
		$images_row_2[] = get_field("hotel_room_" . $i ); 
	}

	$chooseus_title           = get_field('choose_us_title');
	$chooseus_desc            = get_field('choose_us_description');
	$chooseus_btn_text        = get_field('choose_us_button_text');
	$chooseus_btn_url         = get_field('choose_us_button_url');
	$chooseus_image           = get_field('choose_us_image');

	$testimonial_title        = get_field('testimonial_title');
	$testimonial_1_image      = get_field('testimonial_1_image');
	$testimonial_1_person     = get_field('testimonial_1_person');
	$testimonial_1_text       = get_field('testimonial_1_text');
	$testimonial_2_image      = get_field('testimonial_2_image');
	$testimonial_2_person     = get_field('testimonial_2_person');
	$testimonial_2_text       = get_field('testimonial_2_text');
	$testimonial_3_image      = get_field('testimonial_3_image');
	$testimonial_3_person     = get_field('testimonial_3_person');
	$testimonial_3_text       = get_field('testimonial_3_text');
	
?>

<div id="hotel-cover">
		<div>
			<h2><?php echo $cover_title; ?></h2>
			<a href="#hotel-room-gallery"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</div>
	</div>
	<div id="hotel-wrapper">
		<div id="hotel-about-us">
			<h2><?php echo $aboutus_title; ?></h2>
			<hr>
				<p><?php echo $aboutus_desc; ?></p>
		</div>
		<div id="hotel-room-gallery">
			<h2><?php echo $room_title; ?></h2>
			<hr>
			<div class="gallery-img-row">
			  <!-- If image exists -->
			  <?php  if(!empty($images_row_1)) :?>

			  <?php 
		  			foreach ($images_row_1 as $image) {
						echo "<a href='". $image['url'] . "' data-lightbox='roadtrip'><img src='" . $image['url'] . "' class='imagedropshadow'></a>";
					}
			   ?>

			  <?php endif ?>
			</div>
			<div class="gallery-img-row">
			  <!-- If image exists -->
			  <?php  if(!empty($images_row_2)) :?>

			  <?php 
		  			foreach ($images_row_2 as $image2) {
						echo "<a href='". $image2['url'] . "' data-lightbox='roadtrip'><img src='" . $image2['url'] . "' class='imagedropshadow'></a>";
					}
			   ?>

			  <?php endif ?>
			</div>
		</div>
	</div>
	<div id="hotel-room-section">
		<div id="hotel-room-desc">
			<h2><?php echo $chooseus_title; ?></h2>
		    <p><?php echo $chooseus_desc; ?></p>
		    <?php echo "<a href='".$chooseus_btn_url."'>" . $chooseus_btn_text . "</a>"; ?>
		</div>
		<div id="hotel-room-img">
			<img src="<?php echo $chooseus_image['url']; ?>">
		</div>
	</div>

	<div id="testimonial">
		<h2><?php echo $testimonial_title; ?></h2>
		<hr>
		<div>
			<div class="testim-col">
				<img src="<?php echo $testimonial_1_image['url']; ?>">
				<h5><?php echo $testimonial_1_person; ?></h5>
				<p><?php echo $testimonial_1_text; ?></p>
			</div>
			<div class="testim-col">
				<img src="<?php echo $testimonial_2_image['url']; ?>">
				<h5><?php echo $testimonial_2_person; ?></h5>
				<p><?php echo $testimonial_2_text; ?></p>
			</div>
			<div class="testim-col">
				<img src="<?php echo $testimonial_3_image['url']; ?>">
				<h5><?php echo $testimonial_3_person; ?></h5>
				<p><?php echo $testimonial_3_text; ?></p>
			</div>
			

		</div>
	</div>

<?php get_footer(); ?>