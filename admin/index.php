<?php

/*
 * 
 * Admin Section
 * 
 */

require '../blog.php';
$data = array();
$date = date('Y-m-d H:i:s');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $title = $_POST['title'];
   $body = $_POST['body'];

   if (empty($title) || empty($body)) {
      $data['status'] = 'Please fill out both inputs.';
   } else {
      //  use query then create row in table
      Blog\DB\query(
              "INSERT INTO posts(title, body, date) VALUES(:title, :body, :date)", 
              array('title' => $title, 'body' => $body, 'date' => $date), $conn);
      
      $data['status'] = 'Row has succussfully been inserted';
   }
}

view('admin/create', $data);
