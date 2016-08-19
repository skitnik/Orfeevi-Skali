<?php
/* 
	Template Name: Home Page
 */

	$cover_title        = get_field('cover_title');
	$cover_desc         = get_field('cover_description');
	$cover_btn_text     = get_field('button_text');
	$cover_btn_url      = get_field('button_url');
	
	$chooseUs_title     = get_field('chooseus_title');
	$chooseUs_desc      = get_field('chooseus_description');
	
	$food_main_img      = get_field('food_section_main_image');
	$food_section_title = get_field('food_section_title');
	$food_section_desc  = get_field('food_section_description');
	$food_btn_text      = get_field('food_btn_text');
	$food_btn_link      = get_field('food_btn_link');
	$images = array();
	for ($i=1; $i <=8 ; $i++) { 
		$images[] = get_field("slider_img_" . $i ); 
	}
	
	$hotel_title        = get_field('hotel_title');
	$hotel_desc         = get_field('hotel_description');
	$hotel_btn_text      = get_field('hotel_btn_text');
	$hotel_btn_link      = get_field('hotel_btn_link');
	$hotel_image        = get_field('hotel_image');

get_header(); ?>
	

	<div id="cover">
		<div>
			<h2><?php echo $cover_title; ?></h2>
			<p class="cover-text"><?php echo $cover_desc; ?></p>
			<?php echo "<a href='".$cover_btn_url."' class='cover-button'>" . $cover_btn_text . "</a>"; ?>
			
		</div>
	</div>
	
	<div id="chooseUs">
		<h2><?php echo $chooseUs_title;  ?></h2>
		<hr>
		<p><?php echo $chooseUs_desc; ?></p>
	</div>
	<div id="home-food-section">
		<div id="home-food">
			<div>
				<h2><?php echo $food_section_title; ?></h2>
			    <p><?php echo $food_section_desc; ?></p>
			</div>
			<?php echo "<a href='" . $food_btn_link . "'>" . $food_btn_text . "</a>"; ?>
		</div>
		<div id="home-food-img">

			<!-- If image exists -->
			<?php if(!empty($food_main_img)) : ?>

				<img src="<?php echo $food_main_img['url'] ?>" alt="<?php echo $food_main_img['alt'] ?>">

			<?php endif; ?>

		</div>
		<div id="home-food-slider">
			<div class="flexslider">
			  <ul class="slides">


			  <!-- If image exists -->
			  <?php  if(!empty($images)) :?>

			  <?php 
		  			foreach ($images as $value) {
						echo "<li><img src='" . $value['url'] . "'></li>";
					}
			   ?>

			  <?php endif ?>
			 
			  </ul>
			</div>
		</div>
	</div>

	<div id="home-hotel-section">
		<div id="home-hotel-desc">
			<div>
				<h2><?php echo $hotel_title;  ?></h2>
			    <p><?php echo $hotel_desc; ?></p>
			</div>
			<?php echo "<a href='" . $hotel_btn_link . "'>" . $hotel_btn_text . "</a>"; ?>
		</div>
		<div id="home-hotel-img">
			<!-- If image exists -->
			<?php if(!empty($hotel_image)) : ?>

				<img src="<?php echo $hotel_image['url'] ?>" alt="<?php echo $hotel_image['alt'] ?>">

			<?php endif; ?>
		</div>
	</div>

	

<?php
get_footer();
?>