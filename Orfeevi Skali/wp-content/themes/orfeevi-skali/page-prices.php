<?php 
	/* Template Name: Prices Page  */

	$cover_title               = get_field('cover_title');
	$cover_subtitle            = get_field('cover_subtitle');
	$cover_button_text         = get_field('cover_button_text');
	$cover_button_text_url     = get_field('cover_button_text_url');
	
	$plan_section_title        = get_field('plan_section_title');
	$plans_season_1            = get_field('plans_season_1');
	$plans_season_2            = get_field('plans_season_2');
	$plans_season_3            = get_field('plans_season_3');
	$plan_1_room_type          = get_field('plan_1_room_type');
	$plan_2_room_type          = get_field('plan_2_room_type');
	$plan_3_room_type          = get_field('plan_3_room_type');
	$plan_1_button_text        = get_field('plan_1_button_text');
	$plan_2_button_text        = get_field('plan_2_button_text');
	$plan_3_button_text        = get_field('plan_3_button_text');
	// For custom prices see custom.js 
	$plan_1_extras = array();
	for ($i=1; $i <=4 ; $i++) { 
		$plan_1_extras[] = get_field("plan_1_extra_" . $i ); 
	}
	$plan_2_extras = array();
	for ($i=1; $i <=4 ; $i++) { 
		$plan_2_extras[] = get_field("plan_2_extra_" . $i ); 
	}
	$plan_3_extras = array();
	for ($i=1; $i <=4 ; $i++) { 
		$plan_3_extras[] = get_field("plan_3_extra_" . $i ); 
	}

	$question_section_title             = get_field('question_section_title');
	$question_button_text               = get_field('question_button_text');
	$question_form_shortcode            = get_field('question_form_shortcode');

	$our_room_section_title             = get_field('section_title');
	$room_1_type                        = get_field('room_1_type');
	$room_1_image                       = get_field('room_1_image');
	$room_2_type                        = get_field('room_2_type');
	$room_2_image                       = get_field('room_2_image');
	$room_3_type                        = get_field('room_3_type');
	$room_3_image                       = get_field('room_3_image');

	$reserve_section_title              = get_field('reserve_section_title');
	$reserve_button_text                = get_field('reserve_button_text');
	$reserve_form_shortcode             = get_field('reserve_form_shortcode');

	get_header(); 
?>

<div id="prices-cover">
		<div>
			<h2><?php echo $cover_title; ?></h2>
			<p><?php echo $cover_subtitle; ?></p>
			<?php echo "<a href='" . $cover_button_text_url . "'>" . $cover_button_text . "</a>"; ?>
		</div>
	</div>
	<div id="price-table-wrapper">
		<div id="price-table-heading">
			<h2><?php echo $plan_section_title; ?></h2>
			<hr>
			<div id="season">
				<button value="winter" class="season"><?php echo $plans_season_1; ?></button>
				<span class="button-separator"></span>
				<button value="asd" class="season"><?php echo $plans_season_2; ?></button>
				<span class="button-separator"></span>
				<button value="summer" class="season"><?php echo $plans_season_3; ?></button>
			</div>
		</div>
		<div id="price-table">
			<div class="price-col">
				<p class="room-price double">30лв</p>
				<p class="room-type"><?php echo $plan_1_room_type; ?></p>
				<?php 
					foreach($plan_1_extras as $extra){
						echo "<p class='room-desc'>" . $extra . "<hr></p>";
					}
				?>
				<p><a href="#reserve" class="book"><?php echo $plan_1_button_text; ?></a></p>
			</div>
			<div class="price-col active">
				<p class="room-price tripple">40лв</p>
				<p class="room-type"><?php echo $plan_2_room_type; ?></p>
				<?php 
					foreach($plan_2_extras as $extra){
						echo "<p class='room-desc'>" . $extra . "<hr></p>";
					}
				?>
				<p><a href="#reserve" class="book"><?php echo $plan_2_button_text; ?></a></p>
			</div>
			<div class="price-col">
				<p class="room-price forth">50лв</p>
				<p class="room-type"><?php echo $plan_3_room_type; ?></p>
				<?php 
					foreach($plan_3_extras as $extra){
						echo "<p class='room-desc'>" . $extra . "<hr></p>";
					}
				?>
				<p><a href="#reserve" class="book"><?php echo $plan_3_button_text; ?></a></p>
			</div>
		</div>
	</div>
	<div id="price-questions-form">
		<h2><?php echo $question_section_title; ?></h2>
		<hr>
		<form method="POST">
			<?php echo do_shortcode($question_form_shortcode); ?>
		</form>
	</div>
	<div id="our-rooms">
		<h2><?php echo $our_room_section_title; ?></h2>
		<hr>
		<div>
			<div class="image-row">
				<div>
					<h4><?php echo $room_1_type; ?></h4>
					<a href="<?php echo $room_1_image['url'] ?>" data-lightbox="roadtrip"><img src="<?php echo $room_1_image['url'] ?>"></a>
				</div>
				<div>
					<h4><?php echo $room_2_type; ?></h4>
					<a href="<?php echo $room_2_image['url'] ?>" data-lightbox="roadtrip"><img src="<?php echo $room_2_image['url'] ?>"></a>
				</div>
				<div>
					<h4><?php echo $room_3_type; ?></h4>
					<a href="<?php echo $room_3_image['url'] ?>" data-lightbox="roadtrip"><img src="<?php echo $room_3_image['url'] ?>"></a>
				</div>
			</div>
		</div>
	</div>
	<div id="reserve">
		<h2><?php echo $reserve_section_title; ?></h2>
		<hr>
		<?php echo do_shortcode($reserve_form_shortcode); ?>
	</div>

<?php get_footer(); ?>