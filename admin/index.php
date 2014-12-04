<?php

/*
 * 
 * Admin Section
 * 
 */

require '../blog.php';
$data = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $title = $_POST['title'];
   $body = $_POST['body'];

   if (empty($title) || empty($body)) {
      $data['status'] = 'Please fill out both inputs.';
   } else {
      // then create row in table
      Blog\DB\query(
              "INSERT INTO posts(title, body) VALUES(:title, :body)", array('title' => $title, 'body' => $body), $conn);
      
      $data['status'] = 'Row has succussfully been inserted';
   }
}

view('admin/create', $data);
