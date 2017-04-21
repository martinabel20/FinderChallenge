<?php 


$data = file_get_contents("js/books-schema.json");
$products = json_decode($data, true);

foreach ($products as $product) {
    print_r($product);
}

 ?>