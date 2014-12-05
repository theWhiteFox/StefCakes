<?php
/*
 * This is a controller file
 * Single blog post
 */

require 'blog.php';
use Blog\DB; // namespace

// fetch a single blog by id
$post = DB\get_by_id( (int) filter_input(INPUT_GET, 'post_id'), $conn);


// if there is a post set to latest post
if ($post) {
   $post = $post[0];

// load the single view and pass through posts
view('single', array(
	'post' => $post
	));
} else {
   header('location:/PHPfundamentals/14-Blog/');
}
