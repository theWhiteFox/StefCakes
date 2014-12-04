<?php

/*
 * 
 */

require 'blog.php';
use Blog\DB; // namespace

// fetch all posts
$post = DB\get_by_id( (int)$_GET['post_id'], $conn);

if ($post) {
   $post = $post[0];

view('single', array(
	'post' => $post
	));
} else {
   header('location:/PHPfundamentals/14-Blog/');
}
