<?php 
/* Template Name: Contact Page  */
$contact_cover_section_title               = get_field('contact_cover_section_title');
$contact_cover_section_subtitle            = get_field('contact_cover_section_subtitle');
$contact_cover_section_button_text         = get_field('contact_cover_section_button_text');
$contact_cover_section_button_link         = get_field('contact_cover_section_button_link');

$contact_service_1_icon                    = get_field('contact_service_1_icon');
$contact_service_2_icon                    = get_field('contact_service_2_icon');
$contact_service_3_icon                    = get_field('contact_service_3_icon');
$contact_service_1_title                   = get_field('contact_service_1_title');
$contact_service_2_title                   = get_field('contact_service_2_title');
$contact_service_3_title                   = get_field('contact_service_3_title');
$contact_service_1_link                    = get_field('contact_service_1_link');
$contact_service_2_link                    = get_field('contact_service_2_link');
$contact_service_3_link                    = get_field('contact_service_3_link');

$contact_map                               = get_field('contact_map');

$contact_form_section_title                = get_field('contact_form_section_title');
$contact_type_1_icon                       = get_field('contact_type_1_icon');
$contact_type_2_icon                       = get_field('contact_type_2_icon');
$contact_type_3_icon                       = get_field('contact_type_3_icon');
$contact_type_1_title                      = get_field('contact_type_1_title');
$contact_type_2_title                      = get_field('contact_type_2_title');
$contact_type_3_title                      = get_field('contact_type_3_title');
$contact_type_1_description                = get_field('contact_type_1_description');
$contact_type_2_description                = get_field('contact_type_2_description');
$contact_type_3_description                = get_field('contact_type_3_description');

$contact_form                              = get_field('contact_form_shortcode');

get_header(); 
?>

<div id="contact-cover">
		<div>
			<h2><?php echo $contact_cover_section_title; ?></h2>
			<p><?php echo $contact_cover_section_subtitle; ?></p>
			<?php echo "<a href='" . $contact_cover_section_button_link . "'>" . $contact_cover_section_button_text . "</a>"; ?>
		</div>
	</div>
	<div id="contact-wrapper">
		<div id="contact-service">
			<div class="conService">
				<div class="conService-icon">
					<?php echo "<a href='" . $contact_service_1_link . "'>" . $contact_service_1_icon . "</a>"; ?>
				</div>
				<h5><?php echo $contact_service_1_title; ?></h5>
			</div>
			<div class="conService">
				<div class="conService-icon">
					<?php echo "<a href='" . $contact_service_2_link . "'>" . $contact_service_2_icon . "</a>"; ?>
				</div>
				<h5><?php echo $contact_service_2_title; ?></h5>
			</div>
			<div class="conService">
				<div class="conService-icon">
					<?php echo "<a href='" . $contact_service_3_link . "'>" . $contact_service_3_icon . "</a>"; ?>
				</div>
				<h5><?php echo $contact_service_3_title; ?></h5>
			</div>
		</div>
		<div id="contact-map">
			<?php echo $contact_map; ?>
		</div>
		<div id="contact-form">
			<h2><?php echo $contact_form_section_title; ?></h2>
			<hr>
			<div id="contact-form-left">
				<div class="contact-type">
					<div class="contact-type-icon"><?php echo $contact_type_1_icon; ?></div>
					<div class="contact-type-desc">
						<h3><?php echo $contact_type_1_title; ?></h3>
						<div>
							<?php echo $contact_type_1_description; ?>
						</div>
					</div>
				</div>
				<div class="contact-type">
					<div class="contact-type-icon"><?php echo $contact_type_2_icon; ?></div>
					<div class="contact-type-desc">
						<h3><?php echo $contact_type_2_title; ?></h3>
						<div>
							<?php echo $contact_type_2_description; ?>
						</div>
					</div>
				</div>
				<div class="contact-type">
					<div class="contact-type-icon"><?php echo $contact_type_3_icon; ?></div>
					<div class="contact-type-desc">
						<h3><?php echo $contact_type_3_title; ?></h3>
						<div>
							<?php echo $contact_type_3_description; ?>
						</div>
					</div>
				</div>
			</div>
			<div id="contact-form-right">
				<?php echo do_shortcode($contact_form); ?>
			</div>
		</div>
	</div>		



<?php get_footer(); ?>