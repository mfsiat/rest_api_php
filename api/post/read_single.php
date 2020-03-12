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

  // Get ID