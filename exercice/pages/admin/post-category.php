<?php 

// il me faut une liste des catégories

$template =  "admin-post-category";
$path = 'post-category';

$tabObject = loadPostCategorys();
var_dump($tabObject);
require "templates/admin/admin-layout.phtml";

?>
