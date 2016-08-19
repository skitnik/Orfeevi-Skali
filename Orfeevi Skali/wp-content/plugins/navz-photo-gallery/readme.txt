=== Advanced Custom Fields: Photo Gallery Field ===
Contributors: navzme
Tags: acf, advanced, custom, fields, photo gallery, album, fancybox, litebox
Requires at least: 3.8
Tested up to: 4.5.3
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A cool plugin that extends the Advanced Custom Fields (ACF) functionality to add ‘Photo Gallery’ to any post/pages of your choice.

== Description ==
We are just a lightweight extension of Advanced Custom Field (ACF) that adds ‘Photo Gallery’ field to any post/pages on your WordPress website. 
• Visually create your Fields
• Add multiple photos and you can also modify title, caption and link to anything
• Assign your fields to multiple edit pages (via custom location rules)
• Easily load data through a simple and friendly API
• Uses the native WordPress custom post type for ease of use and fast processing
• Uses the native WordPress metadata for ease of use and fast processing

== Usage ==
This plugin will only save the photo id's in the database. This plugin does not render pre-layout on your website. To make this plugin work,
you will have write some codes in your WordPress templates using the ACF Field Key.

Using the Field Key you will have to query the database using 'get_field' or 'get_post_meta' function in WordPress.

== Example:== 
If your field key is field_579ab19b18201 and you want to get the ID's of the photos from the database. You will do something like the following.

To get the ID's of the photos
get_field('$field_key', $post_id);

To get the URL of the Photo
get_field('$field_key_url', $post_id);

To get the URL of the Photo
get_field('$field_key_url', $post_id);

To get the Target of the Photo
get_field('$field_key_target', $post_id);

== Compatibility ==
This ACF field type is compatible with:
* ACF 4

== Tested on ==
* Mac Firefox 	:)
* Mac Safari 	:)
* Mac Chrome	:)
* PC Safari 	:)
* PC Chrome		:)
* PC Firefox	:)
* iPhone Safari :)
* iPad Safari 	:)
* PC ie7		:S

== Installation ==

1. Copy the `navz-photo-gallery` folder into your `wp-content/plugins` folder
2. Activate the Advanced Custom Fields: Photo Gallery plugin via the plugins admin page
3. Create a new field via ACF and select the Photo Gallery type
4. Please refer to the description for more info regarding the field type settings

== Changelog ==

= 1.1.0 =
* Bug fix for Undefined index: acf-photo-gallery-field on file acf-photo_gallery-v4
* When delete the photos from the gallery, the last photo was not deleting
* Changes to the gallery photo was saving in the database

= 1.0.0 =
* Initial Release.