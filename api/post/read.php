<?php
  // we are going to interact with the model 
  
  // Header 
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  // Include the DB
  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Call the read method 
  // Blog post query
  $result = $post->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts 
  if($num > 0) {
    // Post array 
    $post_arr = array();
    
  } else {

  }

?>
