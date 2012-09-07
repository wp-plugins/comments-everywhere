=== Plugin Name ===
Contributors: NeoTheOne
Tags: comments, form, custom, everywhere, template
Requires at least: 3.0
Tested up to: 3.4
Stable tag: Trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Comments Everywhere is a plugin that enables you to insert a comment section where you want by using a shortcode. 

== Description ==

Comments Everywhere is a plugin that enables you to insert a comment section where you want by using a shortcode when normally comments are only possible for posts and pages. This enables you to implememt comments in a custom template or a particular page. You can also use it when you want to modify the template. More information can be found on our website: <a href="http://www.snippetz.nl/plugin-comments-everywhere/" title="Comments Everywhere">Comments Everywhere Website</a>.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the folder `commentseverywhere` to the `/wp-content/plugins/` directory or install via the wordpress Dashboard.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place the shortcode in your template / post
          In a page: [comments_everywhere uid=uniquestring123]
		  In a template: do_shortcode('[comments_everywhere uid=uniquestring123]');

== Frequently Asked Questions ==

= How does this work? =

When you place the shortcode a post_id gets generated using the uid you passed. This id is used to mimic a post or page and insert a comment form and the comments.

= Using a post_id, will it conflict with the comments of the existing posts/pages? =

No, the generated id is such a large number, you would have to write millions of posts.

= When do I need this? =

When you want to insert comments on a particular page, or custom template etc. 

= Can I customize the comment template? =

Yes another reason to use the plugin is the abaility to modify the comment template, as the plugin uses its own file for the template.

== Screenshots ==


== Changelog ==

= 1.0 =
* First Release

== A brief Markdown Example ==

Ordered list:

1. Comments where you want.
2. Modify the comment template / comment form.