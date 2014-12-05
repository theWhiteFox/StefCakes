<?php

/*
 *  Functions file
 */

// accept a path 
function view($path, $data = null)
{
   // if there is data extract data
   if ($data) {
      extract($data);
   }
   
   $path = $path . '.view.php';
   
   // HTML wrapper
   include 'views/layout.php';
 
}
