<?php 

use \Hcode\Page;
use \Hcode\Model\Category;
use \Hcode\Model\Product;

$app->get('/', function() {

	$products = Product::listAll();
	$products = Product::checkList($products);
    
	$page = new Page();

	$page->setTpl("index", [
		'products'=>$products
	]);

});

$app->get("/categories/:idcategory", function($idcategory){

	$category = new Category;

	$category->get((int)$idcategory);

	$page = new Page();

	$page->setTpl("category", [
		'category'=>$category->getValues(),
		'produtcs'=>[]
	]);	

});




 ?>