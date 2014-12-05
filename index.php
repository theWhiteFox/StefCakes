<?php
/* This is a controller file
 * Create a db
 * Create a table posts
 * Connect to the DB
 * Fetch all posts
 * Filter through the posts and display in the view
 * Seperation of Concerns
 */ 
   
require 'blog.php';
use Blog\DB; // namespace

// fetch all posts
$posts = DB\get('posts', $conn);

// load the index view
view('index', array(
	'posts' => $posts,
   'name' => 'SteJ'     
	));
