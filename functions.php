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

// shorting text on index blog posts page
function ellipsis($text, $max=100, $append='&hellip;')
{
    if (strlen($text) <= $max) return $text;
    $out = substr($text,0,$max);
    if (strpos($text,' ') === FALSE) return $out.$append;
    return preg_replace('/\w+$/','',$out).$append;
}

