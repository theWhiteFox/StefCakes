<?php

require 'functions.php';
require 'db.php';
// Connect to the DB with full path
$conn = Blog\DB\connect($config);

// change to 404
if (!$conn) die('Problem connecting to the DB');
