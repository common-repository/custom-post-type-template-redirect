=== Plugin Name ===
Contributors: hotchkissconsulting
Tags: custom post types, redirect, template, theme
Donate link: http://hotchkissconsulting.net/
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 1.0

For custom post types, allows you to have default templates specific to each custom post type.

== Description ==

One of the shortcomings of Custom Post Types in WordPress is that there's no way to easily set a different custom template from the standard single.php.  If it's a custom post type, it's got custom information, and I want to put it in a custom template!

So I threw together a plugin to handle this.  With this plugin installed and activated, it checks your template directory for posttype.php then t_posttype.php.  If neither exists, then the standard WP template rules take effect.

For example, if your custom post type is 'books', it's going to check your template directory for 'books.php'.  If it finds it, it will use that as the template for your 'books' posts.  If not, it will check for 't_books.php', and use that as the template for your 'books' posts.  If it finds neither, the standard WP logic kicks into place, looking to see if you've defined a template for the post, and, if not, using single.php.

== Installation ==

Simply install and activate this plugin, then start putting your templates for custom post types into your theme's directory using the naming structure above.

== Frequently Asked Questions ==

= Does this plugin create new custom post types? =

No, it only changes the order in which WP looks for the template file to display posts belonging to a custom post type.