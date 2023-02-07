<?php 

$template = "admin-post";
$path = 'post';
$database = loadPosts();
require "templates/admin/admin-layout.phtml";
?>