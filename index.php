<?php
echo 'My Blog';
/* Create a db
 * Create a table posts
 * Connect to the DB
 * Fetch all posts
 * Filter through the posts and display in the view
 */ 
   
require 'blog.php';
use Blog\DB; // namespace

// fetch all posts
$posts = DB\get('posts', $conn);

view('index', array(
	'posts' => $posts
	));
?>
