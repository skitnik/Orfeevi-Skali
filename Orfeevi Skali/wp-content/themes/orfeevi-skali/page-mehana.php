<?php 
	/* Template Name: Mehana Page  */ 
	$cover_title               = get_field('mehana_cover_title');

	$about_section_title       = get_field('about_title');
	$about_section_description = get_field('about_description');
	$cons = array();
	for ($i=1; $i <=4 ; $i++) { 
		$cons[] = get_field("mehana_con_" . $i ); 
	}

	$main_dish_section_title   = get_field('dish_section_title');
	$dish_1_name               = get_field('dish_1_name');
	$dish_1_description        = get_field('dish_1_description');
	$dish_1_image              = get_field('dish_1_image');
	$dish_2_name               = get_field('dish_2_name');
	$dish_2_description        = get_field('dish_2_description');
	$dish_2_image              = get_field('dish_2_image');

	$menu_section_title        = get_field('menu_section_title');
	$menu_section_description  = get_field('menu_section_description');
	$all_menus;
	$left_menu = array();
	for ($i=1; $i <=4 ; $i++) { 
		$left_menu[] = get_field("left_dish_" . $i ); 
	}
    $all_menus[] = $left_menu;

	$middle_menu = array();
	for ($i=1; $i <=4 ; $i++) { 
		$middle_menu[] = get_field("middle_dish_" . $i ); 
	}
	$all_menus[] = $middle_menu;

	$right_menu = array();
	for ($i=1; $i <=4 ; $i++) { 
		$right_menu[] = get_field("right_dish_" . $i ); 
	}
    $all_menus[] = $right_menu;

	$slider_images = array();
	for ($i=1; $i <=8 ; $i++) { 
		$slider_images[] = get_field("image_" . $i ); 
	}

	get_header();
?>



<div id="mehana-cover">
		<div>
			<h2><?php echo $about_section_title; ?></h2>
			<a href="#main-dish"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</div>
	</div>

	<div id="mehana-wrapper">
		<div id="mehana-about-heading">
			<h2><?php echo $about_section_title; ?></h2>
			<hr>
		</div>
		<div id="mehana-about-desc">
			<p><?php echo $about_section_description; ?></p>
		</div>
		<div id="mehana-about-ul">
			<ul>
				<?php 
		  			foreach ($cons as $con) {
						echo "<li><i class='fa fa-star-o' aria-hidden='true'></i><p>" . $con . "</p></li>";
					}
			    ?>
			</ul>
		</div>
	</div>

	<div id="main-dish">
		<h2><?php echo $main_dish_section_title; ?></h2>
		<hr>
		<div class="dish">
			<div class="dish-desc">
				<p class="dish-name"><?php echo $dish_1_name; ?></p>
				<p><?php echo $dish_1_description; ?></p>
			</div>
			<div class="dish-img">
				<img src="<?php echo $dish_1_image['url']; ?>">
			</div>
		</div>
		<div class="dish">
			<div class="dish-img">
				<img src="<?php echo $dish_2_image['url']; ?>">
			</div>
			<div class="dish-desc">
				<p class="dish-name"><?php echo $dish_2_name; ?></p>
				<p><?php echo $dish_2_description; ?></p>
			</div>
		</div>
	</div>
	
	<div id="menu">
		<h2><?php echo $menu_section_title; ?></h2>
		<hr>
		<p id="menu-desc"><?php echo $menu_section_description; ?></p>
		<div>
			<?php  
				foreach ($all_menus as $menu) { 
					echo "<ul>";
						foreach ($menu as $menu_dish) {
							echo "<li><i class='fa fa-cutlery' aria-hidden='true'></i><p>" . $menu_dish . "</p></li>";
						}
					echo "</ul>";
				}
			?>	

			<div id="food-slider">
				<div class="flexslider">
				  <ul class="slides">
				  <?php 
				  	foreach($slider_images as $image){
				  		echo "<li><img src='" . $image['url'] . "'></li>";
				  	}
				  ?>
				  </ul>
				</div>
			</div>
			
		</div>
	</div>

<?php get_footer(); ?>